const fs = require('fs');
const path = require('path');
const { exit } = require('process');

// Configuration
const THEME_ROOT = path.join(__dirname, '..');
const SCSS_DIR = path.join(THEME_ROOT, 'scss');
const TEMPLATES_DIR = path.join(THEME_ROOT, 'templates');
const REQUIRED_FILES = ['AGENTS.md', 'blueprints.yaml'];

let hasErrors = false;

function log(msg, type = 'info') {
    const icons = { info: 'ℹ️', success: '✅', error: '❌', warn: '⚠️' };
    console.log(`${icons[type] || ''} ${msg}`);
}

function error(msg) {
    log(msg, 'error');
    hasErrors = true;
}

// 1. Check Required Files
log('Checking required files...', 'info');
REQUIRED_FILES.forEach(file => {
    if (fs.existsSync(path.join(THEME_ROOT, file))) {
        log(`Found ${file}`, 'success');
    } else {
        error(`Missing required file: ${file}`);
    }
});

// 2. Check SCSS for OKLCH (Rule 3.1)
log('Checking SCSS for OKLCH compliance...', 'info');
function walkDir(dir, callback) {
    fs.readdirSync(dir).forEach(f => {
        let dirPath = path.join(dir, f);
        let isDirectory = fs.statSync(dirPath).isDirectory();
        isDirectory ? walkDir(dirPath, callback) : callback(path.join(dir, f));
    });
}

let scssChecked = 0;
let oklchFound = 0;

if (fs.existsSync(SCSS_DIR)) {
    walkDir(SCSS_DIR, (filePath) => {
        if (filePath.endsWith('.scss')) {
            scssChecked++;
            const content = fs.readFileSync(filePath, 'utf8');
            if (content.includes('oklch(')) {
                oklchFound++;
            }
        }
    });
    
    if (oklchFound > 0) {
        log(`Verified OKLCH usage in ${oklchFound}/${scssChecked} SCSS files.`, 'success');
    } else {
        error('No OKLCH color spaces found in SCSS. Violates Rule 3.1.');
    }
} else {
    error('SCSS directory not found.');
}

// 3. Check Templates for Agentic Roles (Attribute check)
log('Checking Templates for Agentic Roles...', 'info');
let templatesChecked = 0;
let rolesFound = 0;

if (fs.existsSync(TEMPLATES_DIR)) {
    walkDir(TEMPLATES_DIR, (filePath) => {
        if (filePath.endsWith('.twig')) {
            templatesChecked++;
            const content = fs.readFileSync(filePath, 'utf8');
            if (content.includes('data-agentic-role') || content.includes('itemscope')) {
                rolesFound++;
            }
        }
    });
    
    if (rolesFound > 0) {
        log(`Found Agentic/Semantic markers in ${rolesFound}/${templatesChecked} templates.`, 'success');
    } else {
        log('Warning: Low usage of data-agentic-role or itemscope markers.', 'warn');
        // Not a hard error for now, but a warning
    }
} else {
    error('Templates directory not found.');
}

// Summary
if (hasErrors) {
    console.log('\n');
    log('Compliance Checks FAILED. See errors above.', 'error');
    exit(1);
} else {
    console.log('\n');
    log('All 2026 Compliance Checks PASSED. Theme is compliant.', 'success');
    exit(0);
}
