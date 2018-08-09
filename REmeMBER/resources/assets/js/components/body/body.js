import React, { Component } from 'react';
// import ReactDOM from 'react-dom';

export default class Body extends Component {
    handleAddCredential(e){
        console.log(e);
    }
    render() {
        return (
            <div >
                <div className="row">
                    <div className="col-md-12">
                       <h3>body</h3>
                       <div className="row">
                            <div className="col-md-12">
                                <a href="#modal1" className="btn-floating btn-large modal-trigger waves-effect waves-light red"><i className="material-icons">add</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="modal1" className="modal">
                    <div className="modal-header">
                        <h4 className="center">Create new credential</h4>
                    </div>
                    <div className="modal-body">
                        <div className="row">
                            <div className="input-field col s6 center">
                                    <i className="material-icons prefix">wb_cloudy</i>
                                <input id="" type="text" className="validate"/>
                                <label className="active" htmlFor="">Site</label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="input-field col s6">
                                <i className="material-icons prefix">email</i>
                                <input id="first_name2" type="text" className="validate"/>
                                <label htmlFor="first_name2">Email/Username</label>
                            </div>
                        </div>
                        <div className="row">
                            <div className="input-field col s6">
                                    <i className="material-icons prefix">lock</i>
                                <input id="password" type="text" className="validate"/>
                                <label htmlFor="password">Password</label>
                            </div>
                        </div>
                    </div>
                    <div className="modal-footer">
                        <div className="center">
                            <button onClick={this.handleAddCredential.bind(this)} className="btn  modal-close waves-effect waves-green">Apply</button>
                            <button className="btn modal-close waves-effect waves-red">Close</button>    
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

// if (document.getElementById('footer')) {
//     ReactDOM.render(<Footer title="this is variable!"/>, document.getElementById('footer'));
// }