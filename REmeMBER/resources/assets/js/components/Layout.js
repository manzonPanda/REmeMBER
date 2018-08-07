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
                <div className="row">
                    <div className="col-md-12">
                        <a href="#modal1" className="btn-floating btn-large modal-trigger waves-effect waves-light red"><i className="material-icons">add</i></a>
                    </div>
                </div>
                <Footer/>
            </div>
        );
    }
}

// if (document.getElementById('app')) {
//     ReactDOM.render(<Layout title="this is variable!"/>, document.getElementById('app'));
// }