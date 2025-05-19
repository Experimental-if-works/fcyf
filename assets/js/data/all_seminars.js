var root = 'https://eventos.fisica.unam.mx/search_event.json?seminar_id=13';
//var root = 'https://eventos.fisica.unam.mx/msv-test/events.json';

let count = 0;
$.ajax({
  url: root,
  crossDomain: true,
  method: 'GET'
}).then(function(data) {
  console.log(data);
  //data.forEach(obj => {console.log(obj.event)});
  //data.forEach(obj => {console.log(obj.event)});
    data.forEach(obj => {
      var speaker_img = obj.event.speaker_url != null ? obj.event.speaker_url : "../assets/img/photo/photo.jpg";
      var banner_url = obj.event.image_url == null ? "" : "https://eventos.fisica.unam.mx";
      var banner_img = obj.event.image_url != null ? obj.event.image_url : "assets/img/seminar/img_profile_back_01.jpg";
      var event_title = lang == 'en' ? obj.event.title_en : obj.event.title;
      var event_abstract = lang == 'en' ? obj.event.summary_en : obj.event.summary;
      var event_date = lang == 'en' ? obj.event.event_date_en : obj.event.event_date_es;
      var more_button_string = lang == 'en' ? ' DETAILS': ' DETALLES DEL EVENTO';
      var resume_string = lang == 'en' ? 'Abstract': 'Resumen';
      var btn_close_string = lang == 'en' ? 'Close': 'Cerrar';
      var fullname = obj.event.name + ' ' + obj.event.last_name
      var min_date = lang == 'en' ? obj.event.event_date_en_min: obj.event.event_date_es_min;
      var institution = obj.event.institution
      var location = obj.event.event_place
      var hour = obj.event.event_hour
      var counter = count++

      if(obj.event.image_url == null){
        var startMainComment = "<!--";
        var endMainComment = "-->";
      }else{
        var startMainComment = "";
        var endMainComment = "";
      }
      if(obj.event.video_url == "" && obj.event.document == null){
        var startComment = "<!--";
        var endComment = "-->";
      }else{
        var startComment = "";
        var endComment = "";
      }
      if(obj.event.video_url == "" ){
        var startVComment = "<!--";
        var endVComment = "-->";
      }else{
        var startVComment = "";
        var endVComment = "";
      }
      if(obj.event.document == null){
        var startDComment = "<!--";
        var endDComment = "-->";
      }else{
        var startDComment = "<!--";
        var endDComment = "-->";
      }
      /*
      if(obj.event.summary_en == "" || obj.event.summary ==""){
        var startVComment = "<!--";
        var endVComment = "-->";
      }else{
        var startVComment = "";
        var endVComment = "";
      }*/
      if(event_id == obj.event.id){
        document.getElementById('event').innerHTML +=
        '<div class="col-md-10 event-background">'+
          '<div class="row justify-content-center">' +
            '<div class="col-md-10">'+
                '<h3>'+ event_title + '</h3>'+
                '<h5 class="section-speaker">'+ fullname + '</h5>'+
                '<h6>'+ institution + '</h6>'+
            '</div>'+
            '<div class="col-md-1 date col-auto current-date">'+
              '<h3>'+ min_date +'</h3>'+
            '</div>'+
          '</div>'+
        '</div>';
        document.getElementById('event_resume').innerHTML +=
        '<div class="col-md-10 text-left">'+
          '<h3>ABSTRACT</h3>'+
        '</div>'+
        '<div class="col-md-10 text-justify">'+
          '<p class="abstract">'+ event_abstract +'</p>'+
        '</div>'+
        '<div class="col-md-8 text-center">'+
          '<img src="'+banner_img+'" class="img-fluid">'+
        '</div>';
      }else{
        var j = new Date().getFullYear()
        for (let i = j; i >= 2022; i--) {
          if (obj.event.year == i){
            var owl_year = $(".owl-carousel-"+ i);
            var newItem = '<div class="item event-background past-event">'+
            '<div class="row justify-content-start">'+
                '<div class="col-md-2 date past-date">'+
                    '<h4>'+ min_date +'</h4>'+
                '</div>'+
                '<div class="col-md-10 past-event-margin">'+
                    '<h5>'+ event_title + '</h5>'+
                    '<h5 class="section-speaker">'+ fullname + '</h5>'+
                    '<h6>Institution</h6>'+
                '</div>'+
            '</div>'+
            '<div class="row justify-content-center">'+
                '<div class="col-md-10">'+
                  '<a class="btn btn-primary" href="evento.php?lang='+ lang +'&event='+ obj.event.id +'"><i class="fa-solid fa-atom"></i>'+ more_button_string +'</a>'+
                '</div>'+
            '</div></div>';
            //document.getElementById('owl-carousel2025').innerHTML += newItem;
            //owl.trigger('insertContent.owl',newItem);
            //document.getElementById('seminars').innerHTML +=
            owl_year.trigger('add.owl.carousel', [newItem]).trigger('refresh.owl.carousel');
          }
        }
      }
    }
  );
  });