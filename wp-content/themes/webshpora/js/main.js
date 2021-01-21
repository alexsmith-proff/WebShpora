$( document ).ready(function() {

	$(function(){
		$('.menu-header__link').click(function(){
			$('.menu-header__link').removeClass('active');
			$(this).addClass('active');
		});
	});


	// ДЕРЕВО В sidebar
	// поместить все текстовые узлы в элемент <span>
    // он занимает только то место, которое необходимо для текста
    for (let li of tree.querySelectorAll('li')) {
    	let span = document.createElement('span');
    	li.prepend(span);
      span.append(span.nextSibling); // поместить текстовый узел внутрь элемента <span>
  }

    //  ловим клики на всём дереве
    tree.onclick = function(event) {

    	if (event.target.tagName != 'SPAN') {
    		return;
    	}

    	let childrenContainer = event.target.parentNode.querySelector('ul');
      if (!childrenContainer) return; // нет детей

      childrenContainer.hidden = !childrenContainer.hidden;

      

      let treeItemContainer = event.target.parentNode.querySelector('.tree-child');
      console.log(event.target.parentElement);
      treeItemContainer=event.target.parentElement;

      if (treeItemContainer.classList.contains('active')){
      	treeItemContainer.classList.remove('active');
      }
      else{
      	treeItemContainer.classList.add('active');
      }

      /*if (treeItemContainer.classList.contains('op')){
      	treeItemContainer.classList.remove('op');
      	treeItemContainer.classList.add('cl');	
      }
      else{
      	treeItemContainer.classList.remove('cl');
      	treeItemContainer.classList.add('op');
      }*/


  }




});