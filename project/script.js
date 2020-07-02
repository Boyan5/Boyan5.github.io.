
	function greeting() {
		let name = document.getElementById('name').value;
		if (name === "" || localStorage.getItem('productsInCart') === null || localStorage.getItem('productsInCart') === 'undefined')
			alert("Add name or product!");
		else
			alert(name + ", thank you for your order!");
	}
	    const list = document.querySelector('.ulist');
        const input = document.getElementById('review');
		const button = document.getElementById('rev');
	function postReview(){
		if (input.value === "")
			alert("Add review!")
		else{
			let myItem = input.value;
			input.value = '';

			const listItem = document.createElement('li');
			listItem.setAttribute("class","listitem")
			const listText = document.createElement('span');
			listItem.appendChild(listText);
			listText.textContent = myItem;
			list.appendChild(listItem);
			input.focus(); 
			
		}
		
		
}


