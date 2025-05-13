import React, { useState } from 'react';

export default function Counter() {
  const [count, setCount] = useState(0);

  return (
    <div className="bg-primary text-white p-4 rounded">
      <p>Count: {count}</p><button onClick={() => setCount(count + 1)}
        className="mt-2 px-3 py-1 bg-white text-black rounded"
      >
        +1
      </button>
    </div>
  );
}
