
   // TEST USER AGENT - added by tr to force android test
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;  


    if (/windows phone/i.test(userAgent)) {

        // Windows Phone comes first because its UA also contains "Android"
        // Do nothing

    } else if (/android/i.test(userAgent)) {
        addBanner();
                
    }


	banner = undefined;

	function addBanner() {
               
		var n = document.querySelector('.smartbanner');
		if (n) {
			n.parentNode.removeChild(n);
		}
		new SmartBanner({
				daysHidden: 15, // days to hide banner after close button clicked
				daysReminder: 90, // days to hide banner after "VIEW" is clicked 
				appStoreLanguage: 'us', // language code for the App Store
				title: 'My Oxfam',
				author: 'Oxfam GB',
				icon: '/~/media/Custom/Components/OGB%20SmartAppBanner/images/appIcon.ashx',
				button: 'VIEW',
				force: 'android' // forces it to be the android banner
		});
	};