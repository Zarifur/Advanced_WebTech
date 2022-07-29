import React from 'react';
import { Link } from 'react-router-dom';
function Head() {

    const element = (
        <div>
            <Link to="/">Home</Link>
            <Link to="/profile">Profile</Link>
            <Link to="/contact">Contact</Link>
        </div>
        
    );

    return element;
}
export default Head;