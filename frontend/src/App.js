import './App.css';
import Navbar from './components/Navbar';
import Sidebar from './components/Sidebar'
import { baseURL } from './helper';
import axios from 'axios';
import { useEffect } from 'react';
import {BrowserRouter, Routes, Route} from 'react-router-dom';








function App() {
  useEffect(()=>{
    axios.get(`${baseURL}/test`).then(res => console.log(res))
  })
  

  return (
    <BrowserRouter>
      <div className="App">
        <header className="App-header">
          <Navbar />
          <Sidebar  />
        </header>
      </div>  
    </BrowserRouter>
    
  );
}

export default App;
