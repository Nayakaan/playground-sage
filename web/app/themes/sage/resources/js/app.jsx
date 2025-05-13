import React from 'react';
import { createRoot } from 'react-dom/client';

import.meta.glob([
  '../images/**',
  '../fonts/**',
]);



import Broken from '@components/Broken';
import { Helper } from '@modules/Helper';

new Helper();

// 3) find all containers and mount your components
document.querySelectorAll('.react-counter').forEach(el => {
  const root = createRoot(el);
  root.render(<Broken />);
});
