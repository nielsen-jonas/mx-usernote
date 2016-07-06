$( document ).ready( function() {
	if (Modernizr.mq('(min-width: 992px)')) {
		mq = 'lg';
	}
	else {
		mq = 'md';
	}
});

$( window ).resize( function() {
	var mqpre = mq;
	if (Modernizr.mq('(min-width: 992px)')) {
		mq = 'lg';
	}
	else {
		mq = 'md';
	}
	if (mqpre != mq) {
		console.log(mq);
	}
});