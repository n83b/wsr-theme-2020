import React from "react";
import ReactDOM from "react-dom";
import Menu from "react-burger-menu/lib/menus/scaleDown";

const siteURL = 'http://dev.test.com';

class WSRMenu extends React.Component {

  constructor(props){
    super(props);
    this.state ={
      menu: []
    }
  }

  componentDidMount() {
    fetch(siteURL + '/wp-json/wsr/menu')
      .then(res => res.json())
      .then(
        (result) => {
          this.setState({
            menu: result
          })
        }
      )

  }

  render() {
    return (
      <Menu right pageWrapId={"page-wrap"} outerContainerId={"body"}>

        {this.state.menu.map(item => (
          <a id={item.ID} className="menu-item" href={item.url}>
            {item.title}
          </a>
        ))}
        
      </Menu>
    );
  }
}

ReactDOM.render(<WSRMenu />, document.getElementById("wsr-menu"));
