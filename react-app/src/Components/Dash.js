import React, {Components} from "react";
import { Link } from "react-router-dom";


const Dash = () => {
    return(
        <div>
             <Link to="/createproduct">Create Product</Link>
             <Link to="/viewproduct">View Product</Link>
             <Link to="/logout">Log out</Link>
            
        </div>
    )
}
export default Dash;