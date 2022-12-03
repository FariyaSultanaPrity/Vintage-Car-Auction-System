import React, {Components} from "react";
import { Link } from "react-router-dom";


const Head = () => {
    return(
        
        <div>
           
            <Link to="">Home</Link>
            <Link to="/login">Login</Link>
            <Link to="/registration">Registration</Link>
            <Link to="/contact">Contact</Link>
            <Link to="/about">About Us</Link>           
           
            
        </div>
    )
}
export default Head;