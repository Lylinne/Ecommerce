class Carousel {

	/**
	* 
	* @param {{}} si aucun element précisé, mettre objet vide par défaut
	* @param{HTMLElement} element 
	* @param {Objet} options
	* @param {Objet} options.slidesToScroll Nombre d'element à faire défiler
	* @param {Objet} options.slidesToScroll Nombre d'element visible dans un slides
	* @param {this.element} pour stocker element dans une variable 
	* @param {this.option} crèe une propriété options
	* @param {Object.assign} fusionner l'objet option avec objet qui a les option par défault
	*/
	construtor (element, options = {}) {
		this.element = element;
		this.options = Object.assign({}, {
			slidesToScroll: 3,
			slidesVisible: 1
		}, options)
		this.children = [].slice.call(element.children)
		var affiche = this.children.length / this.options.slidesVisible
		var root = this.createDivWithClass('carousel')
		var container = this.createDivWithClass('carousel_container')
		container.style.width = (affiche * 100) + "%"
		root.appendChild(container)
		this.element.appendChild(root)
		this.children.forEach((child) => {
			var item = this.createDivWithClass('carousel_item')
			item.appendChild(child)
			container.appendChild(item)

		
		})
	}


/**
*
* @param {string} className
* @returns {HTMLElement}
*/

	createDivWithClass (className){
		var div = document.createElement('div')
		div.setAttribute('class', className)
		return div
	}
}

document.addEventListener('DOMcontentloaded', function () {
	new Carousel(document.querySelector('#carousel'),{
		slidesToScroll: 3,
		slidesVisible: 2
	})
})
