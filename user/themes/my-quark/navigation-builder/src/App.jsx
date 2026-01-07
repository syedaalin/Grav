import React, { useState } from 'react';
import NavigationGraph from './components/NavigationGraph';
import Controls from './components/Controls';
import { observable } from '@legendapp/state';
import { useObservable } from '@legendapp/state/react';

// Sample initial data if none provided
const SAMPLE_DATA = {
  nodes: [
    { id: '1', label: 'Home', color: '#ef4444' },
    { id: '2', label: 'Products', color: '#f59e0b' },
    { id: '3', label: 'About', color: '#10b981' },
    { id: '4', label: 'Contact', color: '#3b82f6' }
  ],
  links: [
    { source: '1', target: '2' },
    { source: '1', target: '3' },
    { source: '1', target: '4' }
  ]
};

function App({ initialData }) {
  // Use LegendState for local state management (optional for this scale but good for "Signals" req)
  const graphData = useObservable(initialData && initialData.nodes ? initialData : SAMPLE_DATA);
  const [selectedNode, setSelectedNode] = useState(null);

  const handleAddNode = () => {
    const id = Date.now().toString();
    const newNode = { id, label: 'New Node', color: '#6366f1' };
    
    // In LegendState, we can push directly
    graphData.nodes.push(newNode);
    
    // Connect to selected or random
    if (selectedNode) {
        graphData.links.push({ source: selectedNode.id, target: id });
    } else if (graphData.nodes.length > 1) {
        // Connect to first node as root default
         graphData.links.push({ source: graphData.nodes[0].id.get(), target: id });
    }
  };

  const handleDelete = () => {
    if (!selectedNode) return;
    const id = selectedNode.id;
    // Simple filter
    graphData.links.set(graphData.links.get().filter(l => l.source.id !== id && l.target.id !== id));
    graphData.nodes.set(graphData.nodes.get().filter(n => n.id !== id));
    setSelectedNode(null);
  };

  const handleSave = () => {
      // Find the hidden textarea and update it
      const textarea = document.getElementById('navigation_builder_data');
      if (textarea) {
          textarea.value = JSON.stringify(graphData.get());
          // Trigger change event if needed for Grav to detect change? 
          // Grav usually detects form submission.
          alert('Data saved to form. Please click "Save" in the Grav Admin header to persist.');
      } else {
          console.warn('Could not find storage element');
      }
  };

  return (
    <div className="w-full h-[600px] flex relative bg-slate-50 border rounded-lg overflow-hidden">
      <div className="flex-grow relative">
        <NavigationGraph 
            data={graphData.get()} 
            onNodeClick={(node) => setSelectedNode(node)} 
        />
        <Controls 
            onAddNode={handleAddNode} 
            onSave={handleSave} 
            onDelete={handleDelete}
        />
      </div>
      
      {/* Sidebar Editor for Selected Node */}
      {selectedNode && (
          <div className="w-80 bg-white border-l border-slate-200 p-4 shadow-xl z-10 glass-panel">
              <h2 className="text-xl font-bold mb-4 font-mono">Edit Node</h2>
              <div className="space-y-4">
                  <div>
                      <label className="block text-sm font-medium text-slate-700">Label</label>
                      <input 
                        type="text" 
                        value={selectedNode.label} 
                        onChange={(e) => {
                             // Update local state and graph data
                             const val = e.target.value;
                             const idx = graphData.nodes.get().findIndex(n => n.id === selectedNode.id);
                             if (idx >= 0) {
                                 graphData.nodes[idx].label.set(val);
                                 setSelectedNode({...selectedNode, label: val});
                             }
                        }}
                        className="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2 border"
                      />
                  </div>
              </div>
          </div>
      )}
    </div>
  );
}

export default App;
