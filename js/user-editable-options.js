window.onload = function() {
	console.log('working');
	var fieldIndex = 2; // 2 because we already have one input field pair displaying by default
	var form = document.getElementById("si-form");
	
	// On click event handler for the add button 
	var addInfoFieldButton = document.getElementById('si-add-field');
	addInfoFieldButton.onclick = function() {

		// Label related elements (not label css element, rather the label for the value the user is inputting eg. Tel#)
		var labelOne = document.createElement("label");
		labelOne.setAttribute("name", "label_" + fieldIndex.toString());

		var inputOne = document.createElement("input");
		inputOne.setAttribute("name", "label_" + fieldIndex.toString());

		var pairOne = document.createElement("div");
		pairOne.classList.add("si-field");

		appendChilds(pairOne, [labelOne, inputOne]);

		// Value related elements
		var labelTwo = document.createElement("label");
		labelTwo.setAttribute("name", "value_" + fieldIndex.toString());

		var inputTwo = document.createElement("input");
		inputTwo.setAttribute("name", "value_" + fieldIndex.toString());

		var pairTwo = document.createElement("div");
		pairTwo.classList.add("si-field");

		appendChilds(pairTwo, [labelTwo, inputTwo]);

		// Append to row
		var row = document.createElement("div");
		row.classList.add("si-editable-row");

		appendChilds(row, [pairOne, pairTwo]);

		// Remove button
		var remove = document.createElement("a");
		remove.innerHTML = "remove";
		remove.classList.add("si-remove-button");
		remove.setAttribute("href", "#");
		remove.onclick = function() {
			this.parentNode.parentNode.removeChild(this.parentNode);
		}
		row.appendChild(remove);

		// Append to form
		form.appendChild(row);

		// Increment for next set of fields
		fieldIndex++;
	}

}

// Helper function to allow setting multiple children at once
function appendChilds(el, childs) { 
	for(var i = 0; i < childs.length; i++) {
		el.appendChild(childs[i]);
	}
}