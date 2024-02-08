@extends('layouts.app')

@section('content')

<html>
    <head>
        <link rel="stylesheet" href="https://journal.itera.ac.id/public/site/sitestyle.css" type="text/css">
        <link rel="stylesheet" href="https://journal.itera.ac.id/public/journals/13/styleSheet.css" type="text/css">
        <link rel="stylesheet" href="https://journal.itera.ac.id/index.php/maximus/$$$call$$$/page/page/css?name=stylesheet" type="text/css">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic" type="text/css">
        <link rel="stylesheet" href="https://journal.itera.ac.id/plugins/generic/orcidProfile/css/orcidProfile.css" type="text/css">
        <style type="text/css">div.eapps-widget{position:relative}div.eapps-widget.eapps-widget-show-toolbar:before{position:absolute;content:"";display:block;bottom:0;top:0;left:0;right:0;pointer-events:none;border:1px solid transparent;transition:border .3s ease;z-index:1}.eapps-widget-toolbar{position:absolute;top:-32px;left:0;right:0;display:block;z-index:99999;padding-bottom:4px;transition:all .3s ease;pointer-events:none;opacity:0}.eapps-widget:hover .eapps-widget-toolbar{opacity:1;pointer-events:auto}.eapps-widget-toolbar a{text-decoration:none;box-shadow:none!important}.eapps-widget-toolbar-panel{border-radius:6px;background-color:#222;color:#fff;display:-ms-inline-flexbox;display:inline-flex;-ms-flex-align:center;align-items:center;top:0;position:relative;transition:all .3s ease;opacity:0;overflow:hidden;-webkit-backface-visibility:hidden;backface-visibility:hidden;box-shadow:0 0 0 1px hsla(0,0%,100%,.2);height:28px}.eapps-widget:hover .eapps-widget-toolbar-panel{opacity:1}.eapps-widget-toolbar-panel-wrapper{width:100%;position:relative}.eapps-widget-toolbar-panel-only-you{position:absolute;top:-24px;font-size:11px;line-height:14px;color:#9c9c9c;padding:5px 4px}.eapps-widget-toolbar-panel-logo{width:28px;height:28px;border-right:1px solid hsla(0,0%,100%,.2);display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center}.eapps-widget-toolbar-panel-logo svg{display:block;width:15px;height:15px;fill:#f93262}.eapps-widget-toolbar-panel-edit{font-size:12px;font-weight:400;line-height:14px;display:-ms-inline-flexbox;display:inline-flex;-ms-flex-align:center;align-items:center;padding:9px;border-right:1px solid hsla(0,0%,100%,.2);color:#fff;text-decoration:none}.eapps-widget-toolbar-panel-edit-icon{width:14px;height:14px;margin-right:8px}.eapps-widget-toolbar-panel-edit-icon svg{display:block;width:100%;height:100%;fill:#fff}.eapps-widget-toolbar-panel-views{display:-ms-inline-flexbox;display:inline-flex;-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center}.eapps-widget-toolbar-panel-views-label{font-size:12px;font-weight:400;line-height:14px;margin-left:8px}.eapps-widget-toolbar-panel-views-bar{display:-ms-inline-flexbox;display:inline-flex;width:70px;height:3px;border-radius:2px;margin-left:8px;background-color:hsla(0,0%,100%,.3)}.eapps-widget-toolbar-panel-views-bar-inner{border-radius:2px;background-color:#4ad504}.eapps-widget-toolbar-panel-views-green .eapps-widget-toolbar-panel-views-bar-inner{background-color:#4ad504}.eapps-widget-toolbar-panel-views-red .eapps-widget-toolbar-panel-views-bar-inner{background-color:#ff4734}.eapps-widget-toolbar-panel-views-orange .eapps-widget-toolbar-panel-views-bar-inner{background-color:#ffb400}.eapps-widget-toolbar-panel-views-percent{display:-ms-inline-flexbox;display:inline-flex;margin-left:8px;margin-right:8px;font-size:12px;font-weight:400;line-height:14px}.eapps-widget-toolbar-panel-views-get-more{padding:9px 16px;background-color:#f93262;color:#fff;font-size:12px;font-weight:400;border-radius:0 6px 6px 0}.eapps-widget-toolbar-panel-share{position:absolute;top:0;display:inline-block;margin-left:8px;width:83px;height:28px;padding-bottom:4px;box-sizing:content-box!important}.eapps-widget-toolbar-panel-share:hover .eapps-widget-toolbar-panel-share-block{opacity:1;pointer-events:all}.eapps-widget-toolbar-panel-share-button{padding:0 18px;height:28px;background-color:#1c91ff;color:#fff;font-size:12px;font-weight:400;border-radius:6px;position:absolute;top:0;display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;cursor:default;-ms-flex-align:center;align-items:center}.eapps-widget-toolbar-panel-share-button svg{display:inline-block;margin-right:6px;fill:#fff;position:relative;top:-1px}.eapps-widget-toolbar-panel-share-block{position:absolute;background:#fff;border:1px solid hsla(0,0%,7%,.1);border-radius:10px;width:209px;top:32px;transform:translateX(-63px);opacity:0;pointer-events:none;transition:all .3s ease;box-shadow:0 4px 6px rgba(0,0,0,.05)}.eapps-widget-toolbar-panel-share-block:hover{opacity:1;pointer-events:all}.eapps-widget-toolbar-panel-share-block-text{color:#111;font-size:15px;font-weight:400;padding:12px 0;text-align:center}.eapps-widget-toolbar-panel-share-block-text-icon{padding-bottom:4px}.eapps-widget-toolbar-panel-share-block-actions{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;border-top:1px solid hsla(0,0%,7%,.1)}.eapps-widget-toolbar-panel-share-block-actions-item{width:33.333333%;display:-ms-flexbox;display:flex;-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center;height:39px;transition:all .3s ease;background-color:transparent}.eapps-widget-toolbar-panel-share-block-actions-item:hover{background-color:#fafafa}.eapps-widget-toolbar-panel-share-block-actions-item a{width:100%;height:100%;display:-ms-flexbox;display:flex;-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center}.eapps-widget-toolbar-panel-share-block-actions-item-icon{width:16px;height:16px;display:block}.eapps-widget-toolbar-panel-share-block-actions-item-facebook .eapps-widget-toolbar-panel-share-block-actions-item-icon{fill:#3c5a9b}.eapps-widget-toolbar-panel-share-block-actions-item-twitter .eapps-widget-toolbar-panel-share-block-actions-item-icon{fill:#1ab2e8}.eapps-widget-toolbar-panel-share-block-actions-item-google .eapps-widget-toolbar-panel-share-block-actions-item-icon{fill:#dd4b39}.eapps-widget-toolbar-panel-share-block-actions-item:not(:last-child){border-right:1px solid hsla(0,0%,7%,.1)}</style>
        <style>
            body.shimeji-pinned iframe {
              pointer-events: none;
            }
            body.shimeji-select-ie {
              cursor: cell !important;
            }
            #shimeji-contextMenu::-webkit-scrollbar {
              width: 6px;
            }
            #shimeji-contextMenu::-webkit-scrollbar-thumb {
              background-color: rgba(30,30,30,0.6);
              border-radius: 3px;
            }
            #shimeji-contextMenu::-webkit-scrollbar-thumb:hover {
              background: #555;
            }
          </style>
          <script src="https://static.elfsight.com/apps/visitor-counter/release/64c1f71ff49941990a28b837b85ced2f7ab483fe/app/visitorCounter.js" defer="defer" charset="UTF-8"></script>
          <style>.eapp-visitor-counter-spinner-component{display:block;border-style:solid;border-radius:50%;border-width:2px;animation:eapp-visitor-counter-spinner-spinning 1s infinite linear}@-moz-keyframes eapp-visitor-counter-spinner-spinning{from{transform:rotate(0)}to{transform:rotate(360deg)}}@-webkit-keyframes eapp-visitor-counter-spinner-spinning{from{transform:rotate(0)}to{transform:rotate(360deg)}}@-o-keyframes eapp-visitor-counter-spinner-spinning{from{transform:rotate(0)}to{transform:rotate(360deg)}}@keyframes eapp-visitor-counter-spinner-spinning{from{transform:rotate(0)}to{transform:rotate(360deg)}}</style>
          <style data-styled="active" data-styled-version="5.3.11"></style>
          <style type="text/css" data-styled-jsx=""></style>
    </head>
    <body>
        <div class="pkp_structure_content has_sidebar">
            <div id="pkp_content_main" class="pkp_structure_main" role="main">
        <div class="page page_article">
	
        <article class="obj_article_details">
        <h1 class="page_title">
            {{ $katalog->judul }}
        </h1>
        
        
        <div class="row">
        <div class="main_entry">
        
                            
            
                                                                                                                        
                    <div class="item abstract">
                    <h3 class="label">Abstract</h3>
                    <p>{{ $katalog->abstrak }}</p><br>
        <p><strong>Kata kunci </strong>: {{ $katalog->katakunci }}</p>
                </div>
            
                
               
                                                                                                                                                                                                                                                    
                        
        </div><!-- .main_entry -->
        
        <div class="entry_details">
        
                                        <div class="item cover_image">
                    <div class="sub_item">
                                                    
                                <img src="{{ asset('assets/katalog/cover/'.$katalog->cover) }}">
                            </a>
                                            </div>
                </div>
            
                                                    <div class="item galleys">
                    <ul class="value galleys_links">
                                                    <li>
                                
        
        
        
                                                        <p>Download pdf</p>
        <a class="obj_galley_link pdf" href="{{ route('katalog.download', $katalog->id) }}" >
        
        
        PDF
        </a>							</li>
                                            </ul>
                </div>
            
                            <div class="item published">
                    <div class="label">
                        Published
                    </div>
                    <div class="value">
                        {{ $katalog->publish }}
                    </div>
                </div>
            
                                        <div class="item citation_formats">
                                                                <div class="sub_item citation_display">
                           
                            
                        
                    </div>
                </div>
                                                            
                <div class="item copyright">
                                                             
                </div>
            
            
        
        </div><!-- .entry_details -->
        </div><!-- .row -->
        
        </article>
        
        
        </div><!-- .page -->
        
        
        </div><!-- pkp_structure_main -->
        
                
                    <div class="pkp_structure_sidebar left" role="complementary" aria-label="Sidebar">
                <div class="pkp_block block_custom" id="customblock-Statistics">
        <div class="content">
        <h2><strong>E-ISSN : {{ $katalog->eissn }}</strong></h2>
       
        
        <p><noscript><div class="statcounter"><a title="Web Analytics"
        href="https://statcounter.com/" target="_blank"><img
        class="statcounter"
        src="https://c.statcounter.com/12901170/0/7ac08d3a/0/"
        alt="Web Analytics"
        referrerPolicy="no-referrer-when-downgrade"></a></div></noscript><!-- End of Statcounter Code --></p>
        </div>
        </div><div class="pkp_block block_custom" id="customblock-visitor">
        <div class="content">
        <p><span class="”title”">Katalog Visitors</span></p>
        <p><strong> flagcounter</strong></p>
        <p><a href="https://info.flagcounter.com/k4J8"><img src="https://s11.flagcounter.com/count2/k4J8/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a></p>
        </div>
        
        
        
        <div class="pkp_block block_custom" id="customblock-statistic">
        <div class="content">
        <p>
        <script src="https://static.elfsight.com/platform/platform.js" defer="defer" data-use-service-core=""></script>
        </p>
        <div class="elfsight-app-d512994f-56c8-4063-90ab-503b770011fc"><div id="eapps-visitor-counter-d512994f-56c8-4063-90ab-503b770011fc" class="RootLayout__RootComponent-sc-1doisyz-0 cvBsnK eapps-visitor-counter-d512994f-56c8-4063-90ab-503b770011fc-custom-css-hook" data-app="eapps-visitor-counter" data-app-version="2.1.3"><div class="VisitorCounter__VisitorCounterComponent-sc-quvvmc-0 cLsqQK"><div class="LayoutTwo__LayoutTwoComponent-sc-1f6u6nx-1 gffwzH"><div class="Title__VisitorCounterTitleComponent-sc-5x9hdv-0 vzDZ LayoutTwo__StyledTitle-sc-1f6u6nx-4 jEdEZD"><div class="Title__Icon-sc-5x9hdv-1 dFtBdD"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M9.333 2c.369 0 .667.291.667.65v11.7c0 .359-.298.65-.667.65H6.667A.658.658 0 0 1 6 14.35V2.65c0-.359.298-.65.667-.65h2.666zm5 3c.369 0 .667.298.667.667v8.666a.667.667 0 0 1-.667.667h-2.666a.667.667 0 0 1-.667-.667V5.667c0-.369.298-.667.667-.667h2.666zm-10 4c.369 0 .667.269.667.6v4.8c0 .331-.298.6-.667.6H1.667C1.298 15 1 14.731 1 14.4V9.6c0-.331.298-.6.667-.6h2.666z"></path></svg></div><div class="Title__Text-sc-5x9hdv-2 ivWUgE">Stats</div></div><div class="FirstCounter__FirstCounterContainer-sc-xduxok-3 hUizJ LayoutTwo__StyledFirstCounter-sc-1f6u6nx-0 iBHise" style="height: 18.7188px;"><div class="FirstCounter__TodayCounter-sc-xduxok-0 dULQEE"><div class="Counter__CounterComponent-sc-103kzvu-1 gFEVwi"><div class="Counter__CounterTitle-sc-103kzvu-0 rBthZ">Today</div><div class="Counter__CounterCount-sc-103kzvu-2 dQWyZw">2</div></div></div><div class="FirstCounter__WeekCounters-sc-xduxok-1 fiLDGu"><div class="Counter__CounterComponent-sc-103kzvu-1 gFEVwi FirstCounter__StyledCounter-sc-xduxok-2 dAFMGX"><div class="Counter__CounterTitle-sc-103kzvu-0 rBthZ">01/31/2024</div><div class="Counter__CounterCount-sc-103kzvu-2 dQWyZw">4</div></div><div class="Counter__CounterComponent-sc-103kzvu-1 gFEVwi FirstCounter__StyledCounter-sc-xduxok-2 dAFMGX"><div class="Counter__CounterTitle-sc-103kzvu-0 rBthZ">02/01/2024</div><div class="Counter__CounterCount-sc-103kzvu-2 dQWyZw">3</div></div><div class="Counter__CounterComponent-sc-103kzvu-1 gFEVwi FirstCounter__StyledCounter-sc-xduxok-2 dAFMGX"><div class="Counter__CounterTitle-sc-103kzvu-0 rBthZ">02/02/2024</div><div class="Counter__CounterCount-sc-103kzvu-2 dQWyZw">6</div></div><div class="Counter__CounterComponent-sc-103kzvu-1 gFEVwi FirstCounter__StyledCounter-sc-xduxok-2 dAFMGX"><div class="Counter__CounterTitle-sc-103kzvu-0 rBthZ">02/03/2024</div><div class="Counter__CounterCount-sc-103kzvu-2 dQWyZw">4</div></div><div class="Counter__CounterComponent-sc-103kzvu-1 gFEVwi FirstCounter__StyledCounter-sc-xduxok-2 dAFMGX"><div class="Counter__CounterTitle-sc-103kzvu-0 rBthZ">02/04/2024</div><div class="Counter__CounterCount-sc-103kzvu-2 dQWyZw">1</div></div><div class="Counter__CounterComponent-sc-103kzvu-1 gFEVwi FirstCounter__StyledCounter-sc-xduxok-2 dAFMGX"><div class="Counter__CounterTitle-sc-103kzvu-0 rBthZ">02/05/2024</div><div class="Counter__CounterCount-sc-103kzvu-2 dQWyZw">6</div></div><div class="Counter__CounterComponent-sc-103kzvu-1 gFEVwi FirstCounter__StyledCounter-sc-xduxok-2 dAFMGX"><div class="Counter__CounterTitle-sc-103kzvu-0 rBthZ">02/06/2024</div><div class="Counter__CounterCount-sc-103kzvu-2 dQWyZw">5</div></div><div class="Counter__CounterComponent-sc-103kzvu-1 gFEVwi FirstCounter__StyledCounter-sc-xduxok-2 dAFMGX"><div class="Counter__CounterTitle-sc-103kzvu-0 rBthZ">02/07/2024</div><div class="Counter__CounterCount-sc-103kzvu-2 dQWyZw">2</div></div></div></div><div class="Chart__Component-sc-16q1e4z-0 eNwrxF LayoutTwo__StyledChart-sc-1f6u6nx-2 PZgGK"><div style="position: relative;"><svg xmlns="http://www.w3.org/2000/svg" role="img" width="208.46875" height="30"><rect width="208.46875" height="30" fill="transparent"></rect><g transform="translate(4,4)"><path fill="none" stroke-width="2" stroke="rgb(65, 99, 233)" d="M0,7C0,7,19.092261904761905,12.166666666666666,28.638392857142858,11C38.18452380952381,9.833333333333334,47.730654761904766,0.6666666666666666,57.276785714285715,0C66.82291666666667,-0.6666666666666666,76.36904761904762,4,85.91517857142857,7C95.46130952380952,10,105.00744047619048,19.166666666666668,114.55357142857143,18C124.09970238095238,16.833333333333332,133.64583333333331,2.333333333333333,143.19196428571428,0C152.73809523809524,-2.333333333333333,162.28422619047618,1.5,171.83035714285714,4C181.3764880952381,6.5,200.46875,15,200.46875,15"></path><g><g transform="translate(0, 7)" style="pointer-events: none;"><circle r="3" fill="rgb(65, 99, 233)" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle></g><g transform="translate(28.638392857142858, 11)" style="pointer-events: none;"><circle r="3" fill="rgb(65, 99, 233)" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle></g><g transform="translate(57.276785714285715, 0)" style="pointer-events: none;"><circle r="3" fill="rgb(65, 99, 233)" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle></g><g transform="translate(85.91517857142857, 7)" style="pointer-events: none;"><circle r="3" fill="rgb(65, 99, 233)" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle></g><g transform="translate(114.55357142857143, 18)" style="pointer-events: none;"><circle r="3" fill="rgb(65, 99, 233)" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle></g><g transform="translate(143.19196428571428, 0)" style="pointer-events: none;"><circle r="3" fill="rgb(65, 99, 233)" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle></g><g transform="translate(171.83035714285714, 4)" style="pointer-events: none;"><circle r="3" fill="rgb(65, 99, 233)" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle></g><g transform="translate(200.46875, 15)" style="pointer-events: none;"><circle r="3" fill="rgb(65, 99, 233)" stroke="transparent" stroke-width="0" style="pointer-events: none;"></circle></g></g><g><rect width="200.46875" height="22" fill="red" opacity="0" style="cursor: auto;"></rect></g></g></svg></div></div><div class="LayoutTwo__LayoutTwoCounters-sc-1f6u6nx-3 jViZeo"><div class="Counter__CounterComponent-sc-103kzvu-1 gFEVwi"><div class="Counter__CounterTitle-sc-103kzvu-0 rBthZ">This Week</div><div class="Counter__CounterCount-sc-103kzvu-2 dQWyZw">13</div></div><div class="Counter__CounterComponent-sc-103kzvu-1 gFEVwi"><div class="Counter__CounterTitle-sc-103kzvu-0 rBthZ">Last Week</div><div class="Counter__CounterCount-sc-103kzvu-2 dQWyZw">28</div></div><div class="Counter__CounterComponent-sc-103kzvu-1 gFEVwi"><div class="Counter__CounterTitle-sc-103kzvu-0 rBthZ">This Month</div><div class="Counter__CounterCount-sc-103kzvu-2 dQWyZw">27</div></div><div class="Counter__CounterComponent-sc-103kzvu-1 gFEVwi"><div class="Counter__CounterTitle-sc-103kzvu-0 rBthZ">Last Month</div><div class="Counter__CounterCount-sc-103kzvu-2 dQWyZw">93</div></div><div class="Counter__CounterComponent-sc-103kzvu-1 hcfLTx"><div class="Counter__CounterTitle-sc-103kzvu-0 rBthZ">Total</div><div class="Counter__CounterCount-sc-103kzvu-2 dQWyZw">569</div></div></div></div><a href="https://elfsight.com/visitor-counter-widget/?utm_source=websites&amp;utm_medium=clients&amp;utm_content=visitor-counter&amp;utm_term=journal.itera.ac.id&amp;utm_campaign=free-widget" target="_blank" rel="noreferrer" style="animation:none!important;background-color:rgba(238,238,238,0.9)!important;border:none!important;bottom:auto!important;color:rgba(0,0,0,.5)!important;display:inline-flex!important;align-items:center!important;gap:6px!important;float:none!important;height:28px!important;left:auto!important;margin:8px 20px 8px!important;opacity:1!important;padding:6px!important;position:relative!important;right:auto!important;top:auto!important;transform:none!important;zoom:1!important;visibility:visible!important;box-sizing:border-box!important;border-radius:6px!important;font-family:Roboto,Arial,Sans-serif!important;font-size:12px!important;font-weight:700!important;line-height:16px!important;text-align:left!important;text-decoration:none!important;max-width:240px!important;text-indent:0!important;z-index:99999!important;align-self:center!important"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 26" style="display:block!important;width:18px!important;height:18px!important;fill:currentColor!important"><path d="M14.98.15c7.035.248 12.559 6.206 12.313 13.284-.246 7.077-6.169 12.633-13.203 12.386-7.035-.247-12.558-6.206-12.313-13.283.012-.34.029-.678.068-1.011.02-.17.283-1.455 1.431-1.302.861.115 1.133.873 1.07 1.45-.012.111-.037.404-.037.404-.016.181-.027.364-.034.547-.197 5.691 4.245 10.483 9.902 10.682 5.657.199 10.42-4.27 10.618-9.961.198-5.692-4.244-10.483-9.901-10.682a10.224 10.224 0 00-1.514.059l-.37.049s-1.48.246-1.809-.76c-.319-.972.426-1.535.93-1.64.92-.178 1.875-.256 2.85-.221zM1.412 1.162c.12 0 .231.033.328.09l13.466 6.944.119.061.05.026v.001c1.204.66 2 1.796 2 3.088l-.001.028.001 4.954v.786l.002.016a.66.66 0 01-.655.665.644.644 0 01-.307-.078l-3.129-1.583c-1.264-.596-2.124-1.72-2.136-3.01 0-.968-.153-2.093-1.693-3.427-.79-.685-1.708-1.483-2.642-2.297l-.701-.612a3239.267 3239.267 0 01-5.145-4.5l-.01-.008-.068-.079a.667.667 0 01.521-1.065z"></path></svg>Free Visitor Counter widget</a></div></div></div>
        </div>
        </div>
            </div><!-- pkp_sidebar.left -->
            </div>
    </body>
</html>
@endsection
