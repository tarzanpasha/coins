$(document).ready(function(){const urlParams=new URLSearchParams(window.location.search);let sortBy=urlParams.get('sortBy');let sortTable=urlParams.get('sortTable');if(sortTable!==null){$(`table[attr-table="${sortTable}"] tr:not(.promoted) .sortable[attr-name="${sortBy}"]`).addClass('is-active');if(urlParams.get('sortDir')==='asc'){$(`table[attr-table="${sortTable}"] .sortable[attr-name="${sortBy}"]`).addClass('asc');}else{$(`table[attr-table="${sortTable}"] .sortable[attr-name="${sortBy}"]`).removeClass('asc');}}
$('.modal-background, .modal-card-foot .close-modal, .modal-card-head button').click(function(){$('.modal').removeClass('is-active')})
$('.nav-mobile .nav-search').click(function(e){e.preventDefault();$(this).toggleClass('is-open');$('.mobile-search').toggleClass('is-open');})
function fallbackCopyTextToClipboard(text){var textArea=document.createElement("textarea");textArea.value=text;textArea.style.top="0";textArea.style.left="0";textArea.style.position="fixed";document.body.appendChild(textArea);textArea.focus();textArea.select();try{var successful=document.execCommand('copy');var msg=successful?'successful':'unsuccessful';console.log('Fallback: Copying text command was '+msg);}catch(err){console.error('Fallback: Oops, unable to copy',err);}
document.body.removeChild(textArea);}
function copyTextToClipboard(text){if(!navigator.clipboard){fallbackCopyTextToClipboard(text);return;}
navigator.clipboard.writeText(text).then(function(){console.log('Async: Copying to clipboard was successful!');},function(err){console.error('Async: Could not copy text: ',err);});}
$('.can-copy').click(function(){copyTextToClipboard($(this).data('copy'))
$('.copied').removeClass('is-hidden')
setTimeout(function(){$('.copied').addClass('is-hidden')},1000)})
$('.home .listings tbody tr:not(.ignore) td:not(.ignore)').click(function(){window.location.href=$(this).parent().find('a.button').attr('href')})
$('.nav-burger').click(function(){$('.mobile-menu').toggleClass('is-open')
if($('.mobile-menu').is(':visible')){$('.overlay').removeClass('is-hidden')}else{$('.overlay').addClass('is-hidden')}})
$('.mobile-menu .close').click(function(){$('.mobile-menu').removeClass('is-open')
$('.overlay').addClass('is-hidden')})
let polling=false;let timeout=false;$('.has-search input').keyup(function(){let resultsElem=$(this).parent().parent().find('.results')
let inputElem=this
if(timeout!==false){clearTimeout(timeout)
timeout=false}
timeout=setTimeout(function(){console.log('Done polling')
doSearch(inputElem,resultsElem)},500)})
function doSearch(inputElem,resultsElem){let q=$(inputElem).val()
if(q.length===0){$(resultsElem).addClass('is-hidden')
return false;}
$(resultsElem).html('')
$.get('/search?q='+q,function(response){if(response.length>0){response.forEach(function(listing){let elem=`<a href="/coin/${listing.id}" class="result">\n`+
`    <img src="${listing.logo_link}" loading="lazy" alt="">\n`+
`    <span class="titles">\n`+
`        <h1>${listing.name}</h1>\n`+
`        <h2>\$${listing.symbol}</h2>\n`+
`    </span>\n`+
`</a>`
$(resultsElem).append($(elem))})}else{let elem='<div class="noresults result">No results...</div>';$(resultsElem).append($(elem))}
$(resultsElem).removeClass('is-hidden')})}
$('body').click(function(e){if($(e.target).parents('.has-search').length==0){$('.has-search .results').addClass('is-hidden')}else{if(!$('.has-search .results').is(':visible')&&$('.has-search:visible input').val().length>0){$('.has-search:visible .results').removeClass('is-hidden')}
console.log('show again')}})
$('.overlay').click(function(){$('.mobile-menu').removeClass('is-open')
$('.overlay').addClass('is-hidden')})
$('form.logout a').click(function(e){e.preventDefault()
$('form.logout').submit()})
$('.accordion h2').click(function(){$(this).parent().toggleClass('is-open')})
$('.has-wishlist').on('click',function(e){e.preventDefault()
e.stopPropagation()
if($('.usercheck').data('loggedin')==0){window.location.href='/login?redir=/watchlist'}
let elem=$(this);let listing_id=$(this).parents('tr').data('listingid')
if($(this).find('.wishlist-add').length>0){console.log('Add',listing_id)
$.post('/watchlist/add/'+listing_id,{'_token':$('div.grwwe').data('xx')},function(response){if(response.success==true){$(elem).html('<div class="wishlist-remove"><img class="star" src="/assets/img/star-filled.png"></div>')}})}else{console.log('Remove',listing_id)
$.post('/watchlist/remove/'+listing_id,{'_token':$('div.grwwe').data('xx')},function(response){if(response.success==true){if($('section.watchlist').length>0){$(elem).parents('tr').remove()
$('section.watchlist tbody tr').each(function(i,e){$(e).find('td:first-of-type span').html(parseInt(i+1))})}else{$(elem).html('<div class="wishlist-add"><img class="star" src="/assets/img/star.png"></div>')}}})}})
if($('section.ama').length>0){let startDate=$('section.ama').data('startdate')*1000
let endDate=$('section.ama').data('enddate')*1000
var x=setInterval(function(){var now=new Date().getTime();var distance=startDate-now;var distanceEnd=endDate-now;console.log(distance,distanceEnd)
var days=Math.floor(distance/(1000*60*60*24));var hours=Math.floor((distance%(1000*60*60*24))/(1000*60*60));var minutes=Math.floor((distance%(1000*60*60))/(1000*60));var seconds=Math.floor((distance%(1000*60))/1000);hours=hours<10?'0'+hours:hours
minutes=minutes<10?'0'+minutes:minutes
seconds=seconds<10?'0'+seconds:seconds
$('section.ama .countdown .days p:first-of-type').html(days)
$('section.ama .countdown .hours p:first-of-type').html(hours)
$('section.ama .countdown .minutes p:first-of-type').html(minutes)
$('section.ama .countdown .seconds p:first-of-type').html(seconds)
if(distanceEnd<0){clearInterval(x);$('section.ama').addClass('is-hidden')}
if(distanceEnd>0&&distance<0){$('section.ama .countdown').addClass('is-hidden')
$('section.ama .live').removeClass('is-hidden')}},1000);}})
function setCookie(cname,cvalue,hours){const d=new Date();d.setTime(d.getTime()+(hours*60*60*1000));let expires="expires="+d.toUTCString();document.cookie=cname+"="+cvalue+";"+expires+";path=/";}
function getCookie(cname){let name=cname+"=";let decodedCookie=decodeURIComponent(document.cookie);let ca=decodedCookie.split(';');for(let i=0;i<ca.length;i++){let c=ca[i];while(c.charAt(0)==' '){c=c.substring(1);}
if(c.indexOf(name)==0){return c.substring(name.length,c.length);}}
return "";}