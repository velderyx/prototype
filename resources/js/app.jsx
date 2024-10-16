import React from 'react';
import ReactDOM from 'react-dom/client';

function App() {
    return <h1>Hello from React!</h1>;  // Simple static content
}

document.addEventListener('DOMContentLoaded', () => {
    const root = ReactDOM.createRoot(document.getElementById('app'));
    root.render(<App />);
});