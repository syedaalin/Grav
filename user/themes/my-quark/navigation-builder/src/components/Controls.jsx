import React from 'react';
import { Plus, Save, Trash2 } from 'lucide-react';

const Controls = ({ onAddNode, onSave, onDelete }) => {
  return (
    <div className="absolute top-4 right-4 flex flex-col gap-2 pointer-events-auto">
      <button 
        onClick={onSave}
        className="bg-black text-white px-4 py-2 font-bold uppercase tracking-wider border-2 border-black hover:bg-white hover:text-black transition-colors shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]"
      >
        <Save size={16} className="inline mr-2" /> Save
      </button>
      <button 
        onClick={onAddNode}
        className="bg-blue-600 text-white px-4 py-2 font-bold uppercase tracking-wider border-2 border-blue-600 hover:bg-white hover:text-blue-600 transition-colors shadow-[4px_4px_0px_0px_rgba(37,99,235,1)]"
      >
        <Plus size={16} className="inline mr-2" /> Add Node
      </button>
      <button 
        onClick={onDelete}
        className="bg-red-600 text-white px-4 py-2 font-bold uppercase tracking-wider border-2 border-red-600 hover:bg-white hover:text-red-600 transition-colors shadow-[4px_4px_0px_0px_rgba(220,38,38,1)]"
      >
        <Trash2 size={16} className="inline mr-2" /> Delete
      </button>
    </div>
  );
};

export default Controls;
