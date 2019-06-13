//import React from "react";
//import ReactDOM from "react-dom";
const siteURL = wsr_ajax.siteurl;

// class WSRMenu extends React.Component {

//   constructor(props){
//     super(props);
//     this.state ={
//       menu: []
//     }
//   }

//   componentDidMount() {
//     fetch(siteURL + '/wp-json/wsr/menu')
//       .then(res => res.json())
//       .then(
//         (result) => {
//           this.setState({
//             menu: result
//           })
//         }
//       )

//   }

//   render() {
//     return (
//       <ul>
//         {this.state.menu.map(item => (
//           <li id={item.ID}><a className="menu-item" href={item.url}>
//             {item.title}
//           </a></li>
//         ))}
// 	   </ul>
//     );
//   }
// }

// ReactDOM.render(<WSRMenu />, document.getElementById("wsr-menu"));
