import React, { useState, useEffect } from 'react'
import axios from 'axios'

function App() {
  const [data, setData] = useState({ hits: [] })
  useEffect(() => {
    console.log('component mounted')
    const fetchData = async () => {
      const result = await axios('http://localhost:8000/webservice.php')
      console.log('component mounted')
      setData(result.data.nodes)
    }
    fetchData()
  }, [])
  return (
    <ul>
      {data.hits.map(item => (
        <li key={item.objectID}>
          <div>
            <img src={item.thumbnail.href} alt={item.thumbnail.description} />
          </div>
        </li>
      ))}
    </ul>
  )
}

export default App
