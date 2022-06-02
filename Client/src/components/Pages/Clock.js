import React  from 'react';
import Clock from 'react-live-clock';

export default class MyComponent extends React.Component {
    render() {
      return(  <Clock style={{color: '#FFD460'}}format={'hh:mm:ss A'} ticking={true} timezone={'Asia/Karachi'} />
       ) }
}