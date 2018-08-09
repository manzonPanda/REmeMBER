import React, { Component } from 'react';
import ReactDOM from 'react-dom';
// import M from 'materialize-css';
import Body from "./body/Body";
import Footer from "./Footer";

export default class Layout extends Component {
    
    // getDefaultProps: function(){

    // },
    
    render() {
        return (
            <div >
                <Body/>

                <Footer/>
            </div>
        );
    }
}

// if (document.getElementById('app')) {
//     ReactDOM.render(<Layout title="this is variable!"/>, document.getElementById('app'));
// }