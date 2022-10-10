import './App.css';
import Navbar from './components/Navbar';
import Sidebar from './components/Sidebar'
// import axios from '../node_modules/axios'
const axios = require('axios');
function App() {
  const array=[
    {text:'hi', destination:'hello'},
    {text:'hi', destination:'hello'},
    {text:'hi', destination:'hello'},
    {text:'hi', destination:'hello'},
    {text:'hi', destination:'hello'},
  ]
  return (
    <div className="App">
      <header className="App-header">
        <Navbar />
        <Sidebar  array = {array}/>
      </header>
    </div>
  );
}

export default App;
