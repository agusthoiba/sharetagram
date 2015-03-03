function facebookShare(){
    window.open("https://www.facebook.com/sharer/sharer.php?u="+location.href, "Share instagram on Facebook","width=640,height=320");
}

function twitterShare(){
    window.open("https://twitter.com/share?url="+location.href, "Share on Twitter","width=550,height=520");
}

function googlePlus(){
    window.open('https://plus.google.com/share?url={'+location.href+'}','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
    return false;
}

function tumblrShare(){
    var itemCaption = $(".item-caption").html();
    var itemImg = $(".item-media img").attr("src");

    var photo = encodeURIComponent(itemImg);
    var caption = encodeURIComponent(itemCaption);

    var url = 'http://www.tumblr.com/share/photo?source='+photo+'&caption='+caption;
    window.open(url, 'Share Instagram photo on Tumblr','menubar=no,toolbar=no ,resizable=yes,scrollbars=yes,height=500,width=700');
    return false;
}

$(function () {
    var loading = $('#loading');

    function pressEnter( e ) {
        if (e.keyCode == 13){
            $("#nav-search-btn").click();
        }
    }

    function search( keyword ) {
        console.log(keyword);
        if ( keyword ) {
            var fCar = keyword.substr(0,1);
            if(  fCar == '#' ||  fCar == '@' ) {
                keyword =  keyword.replace(fCar,'');
            }
            return "/search/" + keyword;
        }
        return false
    }

    //nav
    var navSearchBtn = $("#nav-search-btn");
    navSearchBtn.on("click",function(){
        var keyword =  $("#keyword").val();
        if (search(keyword)) {
            location.assign(search( keyword ));
        }
        return false;
    });

    var avatar = $('#avatar');
    avatar.click(function(){
        $(".triagle-up").toggle();
        $("#profile").toggle();
    });

    //home
    var homeSearchBtn = $("#home-search-btn");
    homeSearchBtn.on("click", function(){
        var keyword =  $("#home-keyword").val();
        if (search(keyword)) {
            location.assign(search(keyword));
        }
        return false;
    });
    
    //image
    var imgLazy = $("img.lazy");
    imgLazy.lazyload({
        effect : "fadeIn",
        bind : "event"
    });

});