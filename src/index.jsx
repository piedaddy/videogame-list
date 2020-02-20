import React from 'react';
import ReactDOM from 'react-dom';
import List from './List/List.jsx';

import './index.scss';
import './index.html';

class App extends React.Component {
  render() {
    return (
      <>
        <List
        url= "http://www.cbp-basicphp.test:8080/day29/morning-workout/api/"        />
      </>
    );
  }
}

ReactDOM.render(<App />, document.getElementById('app'));
