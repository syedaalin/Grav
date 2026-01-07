import React from 'react'
import ReactDOM from 'react-dom/client'
import App from './App.jsx'
import './index.css'

// Find the container injected by Grav Admin
const rootElement = document.getElementById('navigation-builder-root');

if (rootElement) {
  // Get initial data from the hidden input if available
  const inputField = document.getElementById('navigation_builder_data');
  const initialData = inputField ? JSON.parse(inputField.value || '{}') : {};

  ReactDOM.createRoot(rootElement).render(
    <React.StrictMode>
      <App initialData={initialData} />
    </React.StrictMode>,
  )
}
