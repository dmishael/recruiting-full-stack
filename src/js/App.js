/* eslint-disable indent */
import React, { useState, useEffect, Component } from 'react'
import "whatwg-fetch"

class App extends Component {
  constructor(props) {
    super(props);
    this.getPHP = this.getPHP.bind(this);
  }

  getPHP() {
    fetch("http://localhost:8000/webservice.php", {
      method: "GET",
      headers: {},
      body: JSON.stringify({
        content: "test1"
      })
    })
      .then(res => res.json())
      .then(response => {
        console.log("response:");
        console.log(response);
      })


  render() {
    return <div>hi</div>
  }
}
}

export default App
