import {BrowserRouter, Routes, Route} from 'react-router-dom';
import { useEffect } from 'react';
import { baseURL } from './helper';
import axios from 'axios';
import './App.css';

import Navbar from './components/Navbar';
import Sidebar from './components/Sidebar'
import Card from './components/Card';







function App() {
  useEffect(()=>{
    axios.get(`${baseURL}/test`).then(res => console.log(res))
  })
  

  return (
    <BrowserRouter>
      <div className="App">
        <header className="App-header">
          <Navbar />
          <section className="main-content">
            <Sidebar />
            <section className='dynamic-section'>
              <Routes>
                <Route
                  path="/"
                  element={<Card title={"Java"} instructors={"KALE"} />}
                />
              </Routes>
            </section>
          </section>
        </header>
      </div>
    </BrowserRouter>
  );
}

export default App;
