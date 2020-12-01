//  Desc:   This file contains code to give the header.html file's Navbar the functionality
//          to collapse the responsive "hamburger" menu once a link is clicked.
//  Author: Ryan Rivera
//  Date:   11/06/20
//  File:   navbar.js


$('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
});