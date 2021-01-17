import React, { Component } from 'react';
import { Container } from 'reactstrap';
import { Route, Link, BrowserRouter } from 'react-router-dom';
import Ordi from '../views/PageOrdi'
import Login from '../login/login'
import Icon from '@material-ui/core/Icon';
import Tooltip from '@material-ui/core/Tooltip';

class Layout extends Component {


  render() {
    return (

      <Container>
        <BrowserRouter>

          <nav className="navbar navbar-light bg-light justify-content-between">


            <a className="navbar-brand" href="#"></a>
            <form className="form-inline">
              <Link className="navbar-brand" to="/ordinateurs"> <Tooltip title="Ordinateurs"><Icon>computer</Icon></Tooltip></Link>
              <Link className="navbar-brand" to="/login"><Tooltip title="log"><Icon>login</Icon></Tooltip></Link>
            </form>
          </nav>

          <Route path="/ordinateurs" component={Ordi} />
          <Route path="/login" component={Login} />
        </BrowserRouter>
      </Container >
    );
  }
}

export default Layout;