import {BrowserRouter, Routes, Route} from 'react-router-dom';
import { useEffect, useState } from 'react';
import { baseURL } from './helper';
import axios from 'axios';
import './App.css';

import Navbar from './components/Navbar';
import Sidebar from './components/Sidebar'
import Card from './components/Card';







function App() {

  const [courses, setCourses] = useState([])
  useEffect(()=>{
    axios.get(`${baseURL}/test`).
    then(res => {
      console.log(res.data.data)
      for (let name of res.data.data){
        console.log(name.name)
        setCourses(res.data.data)
      }
    })
  },[])
  const instructors = [1,2,3]
  
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
                  element={
                    <div className='dynamic-section'>
                      {courses.map(course=>{
                        return <Card title={course.name} instructors={instructors}/>
                      })}
                      <Card title={"hello"} instructors={instructors}/>
                    </div>
                  }
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
