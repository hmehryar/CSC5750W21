//====================================================================
//
// Title: JavaScript Utilities
// Description:
//   This web page contains shared JavaScript code.
// 
//====================================================================
"use strict";

//====================================================================
// decToHex
//====================================================================
function decToHex(decNumber)
{
  var hexString;
  hexString = Number(decNumber).toString(16);
  if (hexString.length == 1)
  {
    hexString = '0' + hexString;
  }
  return hexString;
}

//====================================================================
// randomizeBackgroundColor
//====================================================================
function randomizeBackgroundColor()
{

  // Declare variables
  var redCode;
  var greenCode;
  var blueCode;
  var colorString;

  // Randomize background color
  redCode = Math.floor(Math.random() * 56) + 200;
  greenCode = Math.floor(Math.random() * 56) + 200;
  blueCode = Math.floor(Math.random() * 56) + 200;
  colorString = '#' + decToHex(redCode) + decToHex(greenCode) + 
    decToHex(blueCode);
  bPage.style.backgroundColor = colorString;

}

//====================================================================
// showDOMtree
//====================================================================
function showDOMtree()
{
          
  // Show node key
  console.log("Node key");
  console.log("<depth> [<node-type>] <node-name>");
  console.log("Node types");
  console.log("1-tag node");
  console.log("2-attribute node");
  console.log("3-text node");
  console.log("8-comment node");

  // Traverse DOM tree
  traverseDOMtree(document, 0);
  console.log("END OF document object model (DOM) tree");
  
}

//====================================================================
// traverseDOMtree
// Node types
// 1 – tag node
// 2 - attribute node
// 3 – text node
// 8 – comment node
//====================================================================
function traverseDOMtree(current, depth)
{
        
  // Declare constants
  const TEXT_NODE = 3;
  const OTHER_NODE = 10;

  // Store child nodes
  var children = current.childNodes;
  
  // Set leader
  var leader = "";
  for (var i = 1; i <= (depth * 2); i++)
    leader = leader + " ";
  
  // Test if any child nodes
  if (children != null)
  {
  
    // Loop to process child nodes
    for (var i = 0; i < children.length; i++) 
    {
    
      // Test if child node is document node
      if (children[i].nodeType == OTHER_NODE)
        console.log("START OF document object model (DOM) tree");
    
      // Test if child node not text node
      else if (children[i].nodeType != TEXT_NODE)
        console.log(leader + depth + " [" + 
          children[i].nodeType + "] " + children[i].nodeName);
      
      // Handle text node
      else
      {
      
        // Test if text node value empty
        // If text node value starts with line feed, its empty
        var str = children[i].nodeValue;
        if (str.charCodeAt(0) != 10)  
          console.log(leader + "    [3] " + str);

      }
      
      // Loop to list attributes
      var attrs = children[i].attributes;
      if (attrs != null)
        for (var j = 0; j < attrs.length; j++)
          console.log(leader + "      [2] " + 
            attrs[j].nodeName + "=" + attrs[j].nodeValue);

      // Traverse current node
      traverseDOMtree(children[i], depth + 1);
      
    } 
    
  }      
}
