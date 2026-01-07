import React from 'react';
import clsx from 'clsx';
import { useFooterStore } from '../store/footerStore';
import { Move, Settings, Trash2 } from 'lucide-react';

const GridCell = ({ cell }) => {
  const removeCell = useFooterStore((state) => state.removeCell);

  const style = {
    gridColumnStart: cell.colStart,
    gridColumnEnd: `span ${cell.colSpan}`,
    gridRowStart: cell.rowStart,
    gridRowEnd: `span ${cell.rowSpan}`,
  };

  return (
    <div
      className={clsx(
        'group relative bg-white border border-gray-200 rounded-lg shadow-sm p-4 transition-all hover:shadow-md hover:border-blue-400',
        'flex flex-col'
      )}
      style={style}
    >
      {/* Header / Drag Handle */}
      <div className="flex items-center justify-between mb-2">
        <div className="flex items-center gap-2">
          <span className="text-xs font-semibold uppercase text-gray-400 tracking-wider">
            {cell.type}
          </span>
        </div>
        <div className="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
           <button 
             className="p-1 text-gray-400 hover:text-red-500 rounded hover:bg-red-50"
             onClick={() => removeCell(cell.id)}
             title="Remove Widget"
           >
             <Trash2 size={14} />
           </button>
           <button 
             className="p-1 text-gray-400 hover:text-gray-700 cursor-grab active:cursor-grabbing"
             title="Drag to Move"
           >
             <Move size={14} />
           </button>
        </div>
      </div>
      
      {/* Content Preview */}
      <div className="flex-1 flex items-center justify-center bg-gray-50 rounded border border-dashed border-gray-200 text-sm text-gray-500">
        {cell.content.title || cell.type}
      </div>
    </div>
  );
};

export default GridCell;
