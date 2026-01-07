import React, { useRef, useEffect, useState } from 'react';
import ForceGraph2D from 'react-force-graph-2d';
import { useResizeObserver } from '../hooks/useResizeObserver'; // We'll make this

const NavigationGraph = ({ data, onNodeClick }) => {
  const containerRef = useRef(null);
  const fgRef = useRef();
  const [dimensions, setDimensions] = useState({ width: 800, height: 600 });

  // Simple resize observer logic inside component for now or use hook
  useEffect(() => {
    if (!containerRef.current) return;
    const observer = new ResizeObserver(entries => {
      for (let entry of entries) {
        setDimensions({
          width: entry.contentRect.width,
          height: entry.contentRect.height
        });
      }
    });
    observer.observe(containerRef.current);
    return () => observer.disconnect();
  }, []);

  return (
    <div ref={containerRef} className="w-full h-full bg-slate-50 relative overflow-hidden rounded-xl border border-slate-200">
      <ForceGraph2D
        ref={fgRef}
        width={dimensions.width}
        height={dimensions.height}
        graphData={data}
        nodeLabel="label"
        nodeColor={node => node.color || '#3b82f6'}
        nodeRelSize={6}
        linkColor={() => 'rgba(150, 150, 150, 0.2)'}
        onNodeClick={onNodeClick}
        cooldownTicks={100}
        onEngineStop={() => fgRef.current.zoomToFit(400)}
        renderNode={(node, ctx, globalScale) => {
            // Label with Liquid Glass effect
             const label = node.label;
             const fontSize = 12/globalScale;
             ctx.font = `${fontSize}px Sans-Serif`;
             const textWidth = ctx.measureText(label).width;
             const bckgDimensions = [textWidth, fontSize].map(n => n + fontSize * 0.2); // some padding

             ctx.fillStyle = 'rgba(255, 255, 255, 0.8)';
             ctx.fillRect(node.x - bckgDimensions[0] / 2, node.y - bckgDimensions[1] / 2, ...bckgDimensions);

             ctx.textAlign = 'center';
             ctx.textBaseline = 'middle';
             ctx.fillStyle = node.color || '#3b82f6';
             ctx.fillText(label, node.x, node.y);
             
             // Draw node circle
             ctx.beginPath();
             ctx.arc(node.x, node.y, 5, 0, 2 * Math.PI, false);
             ctx.fill();
        }}
      />
    </div>
  );
};

export default NavigationGraph;
