import React from 'react';
import { useFooterStore } from '../store/footerStore';
import GridCell from './GridCell';

const BentoGrid = () => {
  const { cells, gridConfig } = useFooterStore();

  return (
    <div className="w-full">
       <div 
         className="grid bg-gray-100 border border-gray-200 rounded-xl p-4 min-h-[500px]"
         style={{
           gridTemplateColumns: `repeat(${gridConfig.columns}, minmax(0, 1fr))`,
           gridTemplateRows: `repeat(${gridConfig.rows}, minmax(100px, auto))`,
           gap: `${gridConfig.gap * 0.25}rem` // 4 units * 0.25 = 1rem
         }}
       >
         {cells.map((cell) => (
           <GridCell key={cell.id} cell={cell} />
         ))}
         
         {/* Empty State / New Cell Placeholder could go here */}
       </div>
    </div>
  );
};

export default BentoGrid;
