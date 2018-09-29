import React, { Component } from 'react';
// import ReactDOM from 'react-dom';

export default class Body extends Component {
    constructor(){
        super();
        this.state={id:215221111};
        this.onClick1 = this.handleAddCredential.bind(this);
    }

    handleAddCredential(button){
        const {id} = button.target;
        console.log(id);
        // this.setState({id:1111});
        // this.setState( () =>({
        //     id:11111
        // }), () =>{
        //     console.log(this.state
        //     );
        // });
        
    }
    render() {
        // setTimeout( () => {
        //     this.setState({id:1111});
        //     console.log(this.state)
        // },2000);
        return (
            <div >

                <div className="row">
                    <div className="col s12 14 offset-14">
                        <a className="waves-effect waves-light btn">Log in</a>
                        <a className="waves-effect waves-light btn">Sign in</a>
                    
                    </div>
                </div>
                       {/* <h3>{this.state.id}</h3> */}
                       {/* <div className="row">
                            <div className="col-md-12">
                                <a href="#modal1" className="btn-floating btn-large modal-trigger waves-effect waves-light red"><i className="material-icons">add</i></a>
                            </div>
                        </div> */}
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
                            <button id="3" onClick={this.onClick1} className="btn  modal-close waves-effect waves-green">Apply</button>
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