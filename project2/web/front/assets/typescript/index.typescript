class PictureUpdate {
	profile: JQuery;
	cover: JQuery;
	constructor() {
		this.profile = $('.profile-pic'); //direct parent
		this.cover = $('.cover'); //direct parent
		
		this.updateProfile();
		this.updateCover();
	}
	
	updateProfile(): void {
		var input: JQuery = $('input', this.profile);
		input.change( (e) => {
			var img: string = URL.createObjectURL(e.target.files[0]);
			this.fireAJAX(null, img, this.profile);
		});
	}
	
	updateCover(): void {
		var input: JQuery = $('input', this.cover);
		input.change( (e: jQueryEventObject) => {
			var img: string = URL.createObjectURL(e.target.files[0]);
			this.fireAJAX(null, img, this.cover);
		});
	}
	
	fireAJAX(url: string, data: string, element: JQuery): void {
		$.ajax({
			type: "POST",
			data: data,
			beforeSend: () => {
				this.startLoader(element);
			},
			success: () => {
				setTimeout(() => {
					this.destroyLoader(element);
					$('> img', element).attr("src", data);
				}, 2000);
			}
		})
	}
	
	startLoader(element: JQuery): void {
		var loader: JQuery = $('.layer', element);
		loader.addClass("visible");
	}
	
	destroyLoader(element: JQuery): void {
		var loader: JQuery = $('.layer', element);
		loader.removeClass("visible");
	}
}

new PictureUpdate();