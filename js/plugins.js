
$(function(){‘use strict’;$(‘.loading-contain’).hide();$(‘.confirm’).click(function(){return confirm(‘Are you sure you want to delete?’);});$(“.tr_tickets”).click(function(){window.location=$(this).data(“href”);});$(‘#origin’).flagStrap({placeholder:{value:””,text:”Country of origin”}});$(‘html’).delegate(‘#open_model’,’click’,function(){var data=$(this).attr(‘data-infa’);$(‘#myModal #mydataInfo’).html(data);});$(‘html’).delegate(‘#btn-close-modal’,’click’,function(){$(‘#myModal, .modal-backdrop’).toggleClass(‘in’);$(‘.modal-backdrop’).remove();$(‘body’).toggleClass(‘modal-open’);$(‘#myModal’).remove();});var ch1=0,snd=0;$(‘html’).delegate(‘#ckeck-btn-v1’,’click’,function(){if(ch1<3){ch1+=1;var v1=$(this).attr(‘data-v1’),v2=$(this).attr(‘data-v2’),pp=$(this).parent().attr(‘id’);$(this).parent().html(‘Checking...’);$.ajax({type:”POST”,url:”check/check.php”,data:{v1:v1,v2:v2},success:function(response){$(‘#’+pp).html(response);ch1-=1;}});}
else
{bootbox.alert(“<b>Wait</b> - Other 3 checking operation is executed!”);}});$(‘html’).delegate(‘#send-btn-v1’,’click’,function(){if(snd<3){snd+=1;var v1=$(this).attr(‘data-v1’),v2=$(this).attr(‘data-v2’),pp=$(this).parent().attr(‘id’);$(this).parent().html(‘Sending...’);$.ajax({type:”POST”,url:”check/check.php”,data:{v1:v1,v2:v2},success:function(response){$(‘#’+pp).html(response);snd-=1;}});}
else
{bootbox.alert(“<b>Wait</b> - Other 3 checking operation is executed!”);}});$(‘html’).delegate(‘.lead-sample’,’click’,function(){let lead_id=$(this).attr(‘data-v2’);$(this).html(‘loading...’);let button=$(this);$.ajax({type:”POST”,url:”leadSample.php”,data:{lead_id:lead_id},success:function(response){button.html(‘sample’);response=JSON.parse(response);$(“#sampleList”).html(response.sample);$(“#lead-country”).html(response.country);$(“#lead-number”).html(response.number);$(“#lead-price”).html(response.price);$(“#leadSample”).modal(‘show’);}});});$(‘html’).delegate(‘#buy-tool-v3-1’,’click’,function(){var v1=$(this).attr(‘data-v1’),v2=$(this).attr(‘data-v2’),pp=$(this).parent().attr(‘id’);bootbox.confirm(“Are you sure? “,function(result){if(result==true){$(‘#’+pp).html(‘Process...’);$.ajax({type:”POST”,url:”buy.php”,data:{v1:v1,v2:v2},success:function(response){var resp=JSON.parse(response);bootbox.alert(resp.msg);$(‘#’+pp).html(resp.btnMsg);}});}});});$(‘#toggbtn’).click(function(){$(‘#co-main-slr’).toggleClass(‘toggled’);$(this).toggleClass(‘glyphicon-indent-right’);$(this).toggleClass(‘glyphicon-indent-left’);});$(‘html’).delegate(‘.static-tools .contain-static-new .static_co’,’mouseenter’,function(){$(this).children(‘.stc-c’).delay(100).fadeIn(600);$(this).siblings().children(‘.stc-c’).fadeOut(0);});$(‘html’).delegate(‘.static-tools .contain-static-new .static_co’,’mouseleave’,function(){$(this).children(‘.stc-c’).fadeOut(0);});$(“.show-items th”).append(‘<span id=“sorttable”>&nbsp;â–¾</span>’);$(‘html’).delegate(‘.tabs_send li’,’click’,function(){if($(this).hasClass(“active”)==false){$(this).siblings().toggleClass(“active”);}
$(this).addClass(“active”);if($(this).hasClass(“editMail”)){$(“.tab-filter”).fadeOut(100);$(“.box_edit_mail”).fadeIn(600);}
else
{$(“.box_edit_mail”).fadeOut(100);$(“.tab-filter”).fadeIn(600);}});$(‘html’).delegate(‘.btn-c-mail’,’click’,function(){$(this).attr(“disabled”,”disabled”);var cMail=$(“#c_email”).val();updt_c_email(cMail);});$(‘html’).delegate(‘.profile-tabs .info’,’click’,function(){$(“.edit-tab”).fadeOut(100);$(“.info-tab”).delay(100).fadeIn();$(this).addClass(“active”);$(this).siblings().removeClass(“active”);});$(‘html’).delegate(‘.profile-tabs .edit’,’click’,function(){$(“.info-tab”).fadeOut(100);$(“.edit-tab”).delay(100).fadeIn();$(this).addClass(“active”);$(this).siblings().removeClass(“active”);});$(“html”).delegate(“.filterselect”,”change”,function(){$(‘#filterbutton’).removeAttr(‘disabled’);});$(“html”).delegate(“.filterinput”,”keyup”,function(){$(‘#filterbutton’).removeAttr(‘disabled’);});$(‘html’).delegate(‘.filtersh’,’click’,function(){$(“.show-items tbody tr”).each(function(){var ck1=$.trim($(this).find(“#shell_country”).text().toLowerCase()),ck2=$.trim($(this).find(“#shell_tld”).text().toLowerCase()),ck3=$.trim($(this).find(“#shell_info”).text().toLowerCase()),ck5=$.trim($(this).find(“#shell_hosting”).text().toLowerCase()),ck6=$.trim($(this).find(“#shell_seller”).text().toLowerCase());var val1=$.trim($(‘select[name=“shell_country”]’).val().toLowerCase()),val2=$.trim($(‘input[name=“shell_tld”]’).val().toLowerCase()),val3=$.trim($(‘input[name=“shell_info”]’).val().toLowerCase()),val5=$.trim($(‘input[name=“shell_hosting”]’).val().toLowerCase()),val6=$.trim($(‘select[name=“shell_seller”]’).val().toLowerCase());if((ck1!=val1&&val1!=‘’)||ck2.indexOf(val2)==-1||ck3.indexOf(val3)==-1||ck5.indexOf(val5)==-1||(ck6!=val6&&val6!=‘’)){$(this).hide();}
else
{$(this).show();}});$(‘#filterbutton’).attr(‘disabled’,’disabled’);});$(‘html’).delegate(‘.filterwb’,’click’,function(){$(“.show-items tbody tr”).each(function(){var ck1=$.trim($(this).find(“#wb_country”).text().toLowerCase()),ck2=$.trim($(this).find(“#wb_domain”).text().toLowerCase()),ck3=$.trim($(this).find(“#wb_type”).text().toLowerCase()),ck4=$.trim($(this).find(“#wb_hosting”).text().toLowerCase()),ck5=$.trim($(this).find(“#wb_seller”).text().toLowerCase());var val1=$.trim($(‘select[name=“webmail_country”]’).val().toLowerCase()),val2=$.trim($(‘input[name=“webmail_domain”]’).val().toLowerCase()),val3=$.trim($(‘input[name=“webmail_type”]’).val().toLowerCase()),val4=$.trim($(‘input[name=“webmail_hosting”]’).val().toLowerCase()),val5=$.trim($(‘select[name=“webmail_seller”]’).val().toLowerCase());if((ck1!=val1&&val1!=‘’)||ck2.indexOf(val2)==-1||ck3.indexOf(val3)==-1||(ck4!=val4&&val4!=‘’)||(ck5!=val5&&val5!=‘’)){$(this).hide();}
else
{$(this).show();}});$(‘#filterbutton’).attr(‘disabled’,’disabled’);});$(‘html’).delegate(‘.filtercp’,’click’,function(){$(“.show-items tbody tr”).each(function(){var ck1=$.trim($(this).find(“#cp_country”).text().toLowerCase()),ck2=$.trim($(this).find(“#cp_tld”).text().toLowerCase()),ck3=$.trim($(this).find(“#cp_hosting”).text().toLowerCase()),ck4=$.trim($(this).find(“#cp_seller”).text().toLowerCase());var val1=$.trim($(‘select[name=“cpanel_country”]’).val().toLowerCase()),val2=$.trim($(‘input[name=“cpanel_tld”]’).val().toLowerCase()),val3=$.trim($(‘input[name=“cpanel_hosting”]’).val().toLowerCase()),val4=$.trim($(‘select[name=“cpanel_seller”]’).val().toLowerCase());if((ck1!=val1&&val1!=‘’)||ck2.indexOf(val2)==-1||ck3.indexOf(val3)==-1||(ck4!=val4&&val4!=‘’)){$(this).hide();}
else
{$(this).show();}});$(‘#filterbutton’).attr(‘disabled’,’disabled’);});$(‘html’).delegate(‘.filterrdp’,’click’,function(){$(“.show-items tbody tr”).each(function(){var ck1=$.trim($(this).find(“#rdp_country”).text().toLowerCase()),ck2=$.trim($(this).find(“#rdp_windows”).text().toLowerCase()),ck3=$.trim($(this).find(“#rdp_access”).text().toLowerCase()),ck4=$.trim($(this).find(“#rdp_hosting”).text().toLowerCase()),ck5=$.trim($(this).find(“#rdp_seller”).text().toLowerCase());var val1=$.trim($(‘select[name=“rdp_country”]’).val().toLowerCase()),val2=$.trim($(‘select[name=“rdp_windows”]’).val().toLowerCase()),val3=$.trim($(‘select[name=“rdp_access”]’).val().toLowerCase()),val4=$.trim($(‘input[name=“rdp_hosting”]’).val().toLowerCase()),val5=$.trim($(‘select[name=“rdp_seller”]’).val().toLowerCase());if((ck1!=val1&&val1!=‘’)||(ck2!=val2&&val2!=‘’)||(ck3!=val3&&val3!=‘’)||ck4.indexOf(val4)==-1||(ck5!=val5&&val5!=‘’)){$(this).hide();}
else
{$(this).show();}});$(‘#filterbutton’).attr(‘disabled’,’disabled’);});$(‘html’).delegate(‘.filterssh’,’click’,function(){$(“.show-items tbody tr”).each(function(){var ck1=$.trim($(this).find(“#ssh_country”).text().toLowerCase()),ck2=$.trim($(this).find(“#ssh_tld”).text().toLowerCase()),ck3=$.trim($(this).find(“#ssh_hosting”).text().toLowerCase()),ck4=$.trim($(this).find(“#ssh_seller”).text().toLowerCase());var val1=$.trim($(‘select[name=“ssh_country”]’).val().toLowerCase()),val2=$.trim($(‘input[name=“ssh_info”]’).val().toLowerCase()),val3=$.trim($(‘input[name=“ssh_hosting”]’).val().toLowerCase()),val4=$.trim($(‘select[name=“ssh_seller”]’).val().toLowerCase());if((ck1!=val1&&val1!=‘’)||ck2.indexOf(val2)==-1||ck3.indexOf(val3)==-1||(ck4!=val4&&val4!=‘’)){$(this).hide();}
else
{$(this).show();}});$(‘#filterbutton’).attr(‘disabled’,’disabled’);});$(‘html’).delegate(‘.filterlds’,’click’,function(){$(“.show-items tbody tr”).each(function(){var ck1=$.trim($(this).find(“#lds_country”).text().toLowerCase()),ck2=$.trim($(this).find(“#lds_desc”).text().toLowerCase()),ck3=$.trim($(this).find(“#lds_seller”).text().toLowerCase());var val1=$.trim($(‘select[name=“lds_country”]’).val().toLowerCase()),val2=$.trim($(‘input[name=“lds_desc”]’).val().toLowerCase()),val3=$.trim($(‘select[name=“lds_seller”]’).val().toLowerCase());if((ck1!=val1&&val1!=‘’)||ck2.indexOf(val2)==-1||(ck3!=val3&&val3!=‘’)){$(this).hide();}
else
{$(this).show();}});$(‘#filterbutton’).attr(‘disabled’,’disabled’);});$(‘html’).delegate(‘.filterbank’,’click’,function(){$(“.show-items tbody tr”).each(function(){var ck1=$.trim($(this).find(“#bank_country”).text().toLowerCase()),ck2=$.trim($(this).find(“#bank_desc”).text().toLowerCase()),ck3=$.trim($(this).find(“#bank_seller”).text().toLowerCase());var val1=$.trim($(‘select[name=“bank_country”]’).val().toLowerCase()),val2=$.trim($(‘input[name=“bank_desc”]’).val().toLowerCase()),val3=$.trim($(‘select[name=“bank_seller”]’).val().toLowerCase());if((ck1!=val1&&val1!=‘’)||ck2.indexOf(val2)==-1||(ck3!=val3&&val3!=‘’)){$(this).hide();}
else
{$(this).show();}});$(‘#filterbutton’).attr(‘disabled’,’disabled’);});$(‘html’).delegate(‘.filterfinf’,’click’,function(){$(“.show-items tbody tr”).each(function(){var ck1=$.trim($(this).find(“#finf_country”).text().toLowerCase()),ck2=$.trim($(this).find(“#finf_desc”).text().toLowerCase()),ck3=$.trim($(this).find(“#finf_seller”).text().toLowerCase());var val1=$.trim($(‘select[name=“finf_country”]’).val().toLowerCase()),val2=$.trim($(‘input[name=“finf_desc”]’).val().toLowerCase()),val3=$.trim($(‘select[name=“finf_seller”]’).val().toLowerCase());if((ck1!=val1&&val1!=‘’)||ck2.indexOf(val2)==-1||(ck3!=val3&&val3!=‘’)){$(this).hide();}
else
{$(this).show();}});$(‘#filterbutton’).attr(‘disabled’,’disabled’);});$(‘html’).delegate(‘.filtertut’,’click’,function(){$(“.show-items tbody tr”).each(function(){var ck1=$.trim($(this).find(“#tutorials_country”).text().toLowerCase()),ck2=$.trim($(this).find(“#tutorials_desc”).text().toLowerCase()),ck3=$.trim($(this).find(“#tutorials_seller”).text().toLowerCase());var val1=$.trim($(‘select[name=“tutorials_country”]’).val().toLowerCase()),val2=$.trim($(‘input[name=“tutorials_desc”]’).val().toLowerCase()),val3=$.trim($(‘select[name=“tutorials_seller”]’).val().toLowerCase());if((ck1!=val1&&val1!=‘’)||ck2.indexOf(val2)==-1||(ck3!=val3&&val3!=‘’)){$(this).hide();}
else
{$(this).show();}});$(‘#filterbutton’).attr(‘disabled’,’disabled’);});$(‘html’).delegate(‘.filterprem’,’click’,function(){$(“.show-items tbody tr”).each(function(){var ck1=$.trim($(this).find(“#premium_country”).text().toLowerCase()),ck2=$.trim($(this).find(“#premium_desc”).text().toLowerCase()),ck3=$.trim($(this).find(“#premium_seller”).text().toLowerCase());var val1=$.trim($(‘select[name=“premium_country”]’).val().toLowerCase()),val2=$.trim($(‘input[name=“premium_desc”]’).val().toLowerCase()),val3=$.trim($(‘select[name=“premium_seller”]’).val().toLowerCase());if((ck1!=val1&&val1!=‘’)||ck2.indexOf(val2)==-1||(ck3!=val3&&val3!=‘’)){$(this).hide();}
else
{$(this).show();}});$(‘#filterbutton’).attr(‘disabled’,’disabled’);});$(‘html’).delegate(‘.filtermlr’,’click’,function(){$(“.show-items tbody tr”).each(function(){var ck1=$.trim($(this).find(“#mlr_id”).text().toLowerCase()),ck2=$.trim($(this).find(“#mlr_country”).text().toLowerCase()),ck3=$.trim($(this).find(“#mlr_hosting”).text().toLowerCase()),ck4=$.trim($(this).find(“#mlr_seller”).text().toLowerCase());var val1=$.trim($(‘input[name=“mlr_id”]’).val().toLowerCase()),val2=$.trim($(‘select[name=“mlr_country”]’).val().toLowerCase()),val3=$.trim($(‘input[name=“mlr_hosting”]’).val().toLowerCase()),val4=$.trim($(‘select[name=“mlr_seller”]’).val().toLowerCase());if((ck1.indexOf(val1)==-1||ck2!=val2&&val2!=‘’)||ck3.indexOf(val3)==-1||(ck4!=val4&&val4!=‘’)){$(this).hide();}
else
{$(this).show();}});$(‘#filterbutton’).attr(‘disabled’,’disabled’);});$(window).scroll(function(){if($(this).scrollTop()>160){$(“.floatThead-container”).css({top:”60px”,backgroundColor:”#FFF”});console.log($(this).scrollTop());}});var docTitle=$(“#dtitle”).text();if(docTitle){document.title=docTitle+’ - Olux Shop’;}
$(‘table’).tablesort();$(“.main-table-t00ls .show-items”).floatThead();});