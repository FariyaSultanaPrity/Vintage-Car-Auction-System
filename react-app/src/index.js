import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import Home from './Components/Home';
import Head from './Components/Head';
import Foot from './Components/Foot';
import Login from './Components/Login';
import Registration from './Components/Registration';
import About from './Components/About';
import Contact from './Components/Contact';
import CreateProduct from './Components/CreateProduct';
import ViewProduct from './Components/ViewProduct';
import Dash from './Components/Dash';
import Logout from './Components/Logout';
import {BrowserRouter as Router, Route, Routes} from 'react-router-dom'
const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
   
    <Router>
      <Head/>
      <Routes>

      <Route exact path='/' element={<Home />} />
      <Route exact path='/login' element={<Login />} />
      <Route exact path='/registration' element={<Registration />} />
      <Route exact path='/about' element={<About />} />
      <Route exact path='/contact' element={<Contact />} />
      <Route exact path='/createproduct' element={<CreateProduct />} />
      <Route exact path='/viewproduct' element={<ViewProduct />} />
      <Route exact path='/dash' element={<Dash />} />
      <Route exact path='/logout' element={<Logout />} />
      </Routes>
      <Foot/>
    </Router>
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();


