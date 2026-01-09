/**
 * AGENTIC MODULE
 * Support for AI agent interactions and future agentic browsing
 * 
 * Features:
 * - Agent action discovery and cataloging
 * - MX (Machine Experience) attribute support
 * - Semantic element registration
 * - Future-proofing for autonomous agents
 * 
 * 2026 Standard: Agentic Web Protocol
 */

export const Agentic = {
    actions: [],
    
    /**
     * Initialize agentic module
     */
    init() {
        this.discoverActions();
        this.registerSemanticElements();
        
        if (this.actions.length > 0) {
            console.log(`Gravity: Found ${this.actions.length} agentic actions`);
        }
    },
    
    /**
     * Discover all agent-actionable elements
     */
    discoverActions() {
        const actionElements = document.querySelectorAll('[data-agent-action]');
        
        actionElements.forEach(el => {
            const action = {
                type: el.dataset.agentAction,
                description: el.dataset.agentDescription || '',
                element: el,
                context: el.dataset.mxContext || el.dataset.mxDescription || ''
            };
            
            this.actions.push(action);
        });
    },
    
    /**
     * Register semantic elements with MX attributes
     * Makes the site more discoverable by AI agents
     */
    registerSemanticElements() {
        // Find all elements with MX (Machine Experience) attributes
        const mxElements = document.querySelectorAll(
            '[data-mx-context], [data-mx-description], [data-mx-intent]'
        );
        
        console.log(`Gravity: ${mxElements.length} MX-tagged elements found`);
    },
    
    /**
     * Execute an agent action programmatically
     * @param {string} actionType - Type of action to execute
     * @returns {boolean} Success status
     */
    executeAction(actionType) {
        const action = this.actions.find(a => a.type === actionType);
        
        if (!action) {
            console.warn(`Gravity: Agent action '${actionType}' not found`);
            return false;
        }
        
        try {
            action.element.click();
            console.log(`Gravity: Executed agent action '${actionType}'`);
            return true;
        } catch (e) {
            console.error(`Gravity: Failed to execute action '${actionType}':`, e);
            return false;
        }
    },
    
    /**
     * Get all available actions (for AI agent discovery)
     * @returns {array} List of available actions
     */
    getAvailableActions() {
        return this.actions.map(action => ({
            type: action.type,
            description: action.description,
            context: action.context
        }));
    },
    
    /**
     * Add a new agent action dynamically
     * @param {HTMLElement} element
     * @param {string} actionType
     * @param {string} description
     */
    registerAction(element, actionType, description = '') {
        element.setAttribute('data-agent-action', actionType);
        if (description) {
            element.setAttribute('data-agent-description', description);
        }
        
        this.actions.push({
            type: actionType,
            description: description,
            element: element,
            context: ''
        });
    }
};
