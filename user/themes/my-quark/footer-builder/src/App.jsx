import React, { useEffect } from 'react';
import BentoGrid from './components/BentoGrid';
import { useFooterStore } from './store/footerStore';

function App() {
  const setCells = useFooterStore((state) => state.setCells);
  const cells = useFooterStore((state) => state.cells);

  // Hydrate from Grav Data on Mount
  useEffect(() => {
    const textarea = document.getElementById('footer_builder_data');
    if (textarea && textarea.value) {
      try {
        const data = JSON.parse(textarea.value);
        if (Array.isArray(data) && data.length > 0) {
           // Basic validation or migration could go here
           setCells(data);
        }
      } catch (e) {
        console.error("Failed to parse existing footer data:", e);
      }
    }
  }, [setCells]);

  // Sync to Grav Data on Change
  useEffect(() => {
    const textarea = document.getElementById('footer_builder_data');
    if (textarea) {
        textarea.value = JSON.stringify(cells);
        // Trigger generic change event so Grav knows something changed (although React controls textarea usually)
        // But here we are writing to a DOM element outside React root.
    }
  }, [cells]);

  return (
    <div className="min-h-screen bg-white">
      <div className="border-b border-gray-200 bg-white px-4 py-4 sm:px-6 mb-6">
        <div className="flex flex-wrap items-center justify-between sm:flex-nowrap">
          <div className="ml-4 mt-2">
            <h3 className="text-lg font-semibold leading-6 text-gray-900">Website Footer Builder 2026</h3>
            <p className="mt-1 text-sm text-gray-500">
              Drag and drop widgets to construct an agentic, modular footer.
            </p>
          </div>
          <div className="ml-4 mt-2 flex-shrink-0">
            {/* Toolbar could go here */}
             <button
              onClick={() => useFooterStore.getState().addCell('html')}
              className="relative inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:focus-visible:outline hover:focus-visible:outline-2 hover:focus-visible:outline-offset-2 hover:focus-visible:outline-indigo-600 hover:bg-indigo-500 transition-colors"
            >
              Add Widget
            </button>
          </div>
        </div>
      </div>

      <div className="px-4 sm:px-6 lg:px-8 pb-10">
         <BentoGrid />
      </div>
    </div>
  );
}

export default App;
