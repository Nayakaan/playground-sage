// resources/js/components/Broken.jsx

import React, { useState, useEffect } from 'react';

export default function Broken() {
  const [counter, setCounter] = useState(0);

  useEffect(() => {
    console.log("Counter changed", counter);
  }, [counter]);

  return (
    <div>
      <h2>Broken Component</h2>
      <button onClick={() => setCounter(counter + 1)}>Click {counter}</button>
    </div>
  );
}
