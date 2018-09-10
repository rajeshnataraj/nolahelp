<?php include("commonlink.php") ?>
<div id="ctl00_HeaderPlaceHolder_PitscoHeader1_pnlHeader" class="header">
   <div class="logo">
      <a style="display: inline-block; border-width: 0px;" href="https://www.staracademyprogram.info/">
      <img style="border-width: 0px;" src="<?php echo $pathval; ?>images/logo.jpg" alt="Pitsco Education"></a>
   </div>
   <div class="siteLinks">
      <div class="account">
         <span id="ctl00_HeaderPlaceHolder_PitscoHeader1_lblPhone" class="phone">800-835-0686</span> <a class="support" href="https://www.staracademyprogram.info/contact">Support</a>
         <a class="aboutUs" href="https://www.staracademyprogram.info/">About us</a> <a id="acctLink" onmouseout="showAcct(&#39;hide&#39;,this.id);" onmouseover="showAcct(&#39;show&#39;,this.id);" class="myAccount" href="http://itc.nolaedu.net/login.php">
         My Account</a>
         <table id="ctl00_HeaderPlaceHolder_PitscoHeader1_PEPSILogInStatus1_tblLoginStatus" border="0" cellpadding="0" cellspacing="0" class="loginstatus">
            <tbody>
               <tr>
                  <td><span class="greeting"><span id="ctl00_HeaderPlaceHolder_PitscoHeader1_PEPSILogInStatus1_lblGreeting"></span> <span id="ctl00_HeaderPlaceHolder_PitscoHeader1_PEPSILogInStatus1_lblName"></span></span>
                  </td>
               </tr>
            </tbody>
         </table>
         <div onmouseout="showAcct(&#39;hide&#39;,this.id);" onmouseover="showAcct(&#39;show&#39;,this.id);" id="acctMenu" style="visibility: hidden;">
            <ul>
               <li><a id="ctl00_HeaderPlaceHolder_PitscoHeader1_lnkSignInOut" href="https://www.staracademyprogram.info/">Sign In/Create Account</a></li>
            </ul>
         </div>
      </div>
   </div>
   <script type="text/javascript">
      function itemOpened(s, e) {
          if ($telerik.isIE8) {
              // Fix an IE 8 bug that causes the list bullets to disappear (standards mode only)
              $telerik.$("li", e.get_item().get_element())
      .each(function () { this.style.cssText = this.style.cssText; });
          }
      }

   </script>
   <!-- <div class="headerBar">
      <div id="ctl00_HeaderPlaceHolder_PitscoHeader1_pnlSearchCartContainer" class="searchCartContainer">
         <div id="ctl00_HeaderPlaceHolder_PitscoHeader1_pnlSimpleSearch2" class="simplesearch2">
            <div class="search" id="TopSubBanner1_ss2_pnlSearch">
               <div id="ctl00_HeaderPlaceHolder_PitscoHeader1_pnlStoreSearchControls" class="search_controls" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_HeaderPlaceHolder_PitscoHeader1_btnSearch&#39;)">
                  <table border="0" cellpadding="0" cellspacing="0">
                     <tbody>
                        <tr>
                           <td class="two">
                              <div class="border">
                                 <div id="suggest">
                                    <div style="position: relative; outline: 0px; border: 0px; margin: 0px; padding: 0px;">
                                       <div style="position: absolute; outline: 0px; margin: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: sans-serif; color: rgb(51, 51, 51); background: transparent; top: 0px; left: 0px; overflow: hidden; visibility: visible;"></div>
                                       <input type="text" spellcheck="false" style="font-size: 16px; font-family: sans-serif; color: rgb(255, 255, 255); background-color: rgb(255, 255, 255); width: 100%; outline: 0px; border: 0px transparent; margin: 0px; padding: 0px; position: absolute; top: 0px; left: 0px; box-shadow: none;"><input type="text" spellcheck="false" style="font-size: 16px; font-family: sans-serif; color: rgb(51, 51, 51); background-color: transparent; width: 100%; outline: 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: top; position: relative;" class="suggestorInput" id="suggestorInput" placeholder="Search products &amp; curriculum" autocomplete="off">
                                       <div style="width: 323px; position: absolute; visibility: hidden; outline: 0px; margin: 0px; padding: 0px; text-align: left; font-size: 16px; font-family: sans-serif; background-color: rgb(255, 255, 255); z-index: 10000; cursor: default; border-style: solid; border-width: 1px; border-color: rgb(170, 170, 170); overflow: hidden scroll; white-space: pre;"></div>
                                    </div>
                                 </div>
                                 <input name="ctl00$HeaderPlaceHolder$PitscoHeader1$searchText" type="hidden" id="ctl00_HeaderPlaceHolder_PitscoHeader1_searchText">
                                 <div class="clear"></div>
                              </div>
                           </td>
                           <td class="one">
                              <div class="border" style="position:relative;">
                                 <div id="ctl00_HeaderPlaceHolder_PitscoHeader1_rcbSimpleSearch" class="RadComboBox RadComboBox_Default" style="width:25px;white-space:normal;">
                                    <table summary="combobox" border="0" style="border-width:0;border-collapse:collapse;width:100%">
                                       <tbody>
                                          <tr class="rcbReadOnly">
                                             <td class="rcbInputCell rcbInputCellLeft" style="width:100%;"><input name="ctl00$HeaderPlaceHolder$PitscoHeader1$rcbSimpleSearch" type="text" class="rcbInput radPreventDecorate" id="ctl00_HeaderPlaceHolder_PitscoHeader1_rcbSimpleSearch_Input" value="Search products &amp; curriculum" readonly="readonly" autocomplete="off"></td>
                                             <td class="rcbArrowCell rcbArrowCellRight"><a id="ctl00_HeaderPlaceHolder_PitscoHeader1_rcbSimpleSearch_Arrow" style="overflow: hidden;display: block;position: relative;outline: none;">select</a></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <div class="rcbSlide" style="z-index:6000;display:none;">
                                       <div id="ctl00_HeaderPlaceHolder_PitscoHeader1_rcbSimpleSearch_DropDown" class="RadComboBoxDropDown RadComboBoxDropDown_Default simpleSearchCB">
                                          <div class="rcbScroll rcbWidth">
                                             <ul class="rcbList">
                                                <li class="rcbItem" style="text-decoration:underline;">Search products &amp; curriculum</li>
                                                <li class="rcbItem">Search articles &amp; videos</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <input id="ctl00_HeaderPlaceHolder_PitscoHeader1_rcbSimpleSearch_ClientState" name="ctl00_HeaderPlaceHolder_PitscoHeader1_rcbSimpleSearch_ClientState" type="hidden" autocomplete="off">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                           </td>
                           <td class="three">
                              <div id="searchLoading" class="hide"><img id="ctl00_HeaderPlaceHolder_PitscoHeader1_Image1" class="MySearchLoadingImage" src="./Asset_files/searchLoader.gif" style="border-width:0px;"></div>
                              <input type="submit" name="ctl00$HeaderPlaceHolder$PitscoHeader1$btnSearch" value="GO" onclick="return checkSearchTerm();" id="ctl00_HeaderPlaceHolder_PitscoHeader1_btnSearch" class="commonButton darkgray">
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div id="ctl00_HeaderPlaceHolder_PitscoHeader1_pnlSecondMegaMenu" class="megamenu">
            <div tabindex="0" id="ctl00_HeaderPlaceHolder_PitscoHeader1_RadMenu2" class="RadMenu RadMenu_Default rmSized" style="height:55px;width:280px;z-index:500;">
               <ul class="rmRootGroup rmHorizontal">
                  <li class="rmItem rmFirst rmTemplate">
                     <div class="rmText">
                        <a href="http://www.pitsco.com/Clubs-and-Competitions&amp;loc=mm"><span class="clubs">Clubs &amp;<br>Competitions</span></a>
                     </div>
                     <div class="rmSlide">
                        <ul class="rmVertical rmGroup rmLevel1">
                           <li class="rmItem rmFirst rmTemplate">
                              <div class="rmText">
                                 <div class="menuItem">
                                    <a href="http://www.pitsco.com/Clubs-and-Competitions/TSA&amp;loc=mm"><span>TSA</span></a>
                                 </div>
                              </div>
                           </li>
                           <li class="rmItem  rmTemplate">
                              <div class="rmText">
                                 <div class="menuItem">
                                    <a href="http://www.pitsco.com/Clubs-and-Competitions/Science-Olympiad&amp;loc=mm"><span>Science Olympiad</span></a>
                                 </div>
                              </div>
                           </li>
                           <li class="rmItem  rmTemplate">
                              <div class="rmText">
                                 <div class="menuItem">
                                    <a href="http://www.pitsco.com/Clubs-and-Competitions/SkillsUSA&amp;loc=mm"><span>SkillsUSA</span></a>
                                 </div>
                              </div>
                           </li>
                           <li class="rmItem  rmTemplate">
                              <div class="rmText">
                                 <div class="menuItem">
                                    <a href="http://www.pitsco.com/Clubs-and-Competitions/Robotics---Competition-page&amp;loc=mm"><span>FIRST</span></a>
                                 </div>
                              </div>
                           </li>
                           <li class="rmItem  rmTemplate">
                              <div class="rmText">
                                 <div class="menuItem">
                                    <a href="http://www.pitsco.com/Clubs-and-Competitions/Sustainable-Energy---Competition&amp;loc=mm"><span>Jr. Solar Sprint</span></a>
                                 </div>
                              </div>
                           </li>
                           <li class="rmItem  rmTemplate">
                              <div class="rmText">
                                 <div class="menuItem">
                                    <a href="http://www.pitsco.com/Clubs-and-Competitions/4H&amp;loc=mm"><span>4H</span></a>
                                 </div>
                              </div>
                           </li>
                           <li class="rmItem  rmTemplate">
                              <div class="rmText">
                                 <div class="menuItem">
                                    <a href="http://www.pitsco.com/Clubs-and-Competitions/F1&amp;loc=mm"><span>F1 in Schools</span></a>
                                 </div>
                              </div>
                           </li>
                           <li class="rmItem rmLast rmTemplate">
                              <div class="rmText">
                                 <div class="menuItem">
                                    <a href="http://www.pitsco.com/Clubs-and-Competitions/Odyssey&amp;loc=mm"><span>Odyssey of the Mind</span></a>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="rmItem rmLast rmTemplate">
                     <div class="rmText">
                        <a href="http://blog.pitsco.com/?loc=mm"><span class="community">Blog</span></a>
                     </div>
                  </li>
               </ul>
               <input id="ctl00_HeaderPlaceHolder_PitscoHeader1_RadMenu2_ClientState" name="ctl00_HeaderPlaceHolder_PitscoHeader1_RadMenu2_ClientState" type="hidden" autocomplete="off">
            </div>
         </div>
         <div class="RadAjaxPanel" id="ctl00_HeaderPlaceHolder_PitscoHeader1_ctl00_HeaderPlaceHolder_PitscoHeader1_radAPCartPanel" style="display: block;">
            <div id="ctl00_HeaderPlaceHolder_PitscoHeader1_radAPCart" class="apCart">
               <div id="ctl00_HeaderPlaceHolder_PitscoHeader1_pnlCartList">
                  <div class="CartList">
                     <div class="cartBtn" id="cartBtn">
                        <a href="javascript:void(0)" id="cartLink" class="cartPopUpLink" onmouseover="showCart(&#39;show&#39;,this.id);" onmouseout="cancelShowCart(); showCart(&#39;hide&#39;,this.id);">
                           <table>
                              <tbody>
                                 <tr>
                                    <td class="cartBtnleft">
                                       <div></div>
                                    </td>
                                    <td class="cartBtnmiddle">
                                       <div id="ctl00_HeaderPlaceHolder_PitscoHeader1_pnlCartDetails">
                                          <span>
                                             <div id="itemCount">0</div>
                                          </span>
                                       </div>
                                    </td>
                                    <td class="cartBtnright">
                                       <div></div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <span>My Cart</span>
                        </a>
                     </div>
                  </div>
                  <div id="cartList" class="cartPopUp phy" style="visibility: hidden;" onmouseover="cancelShowCart();showCart(&#39;show&#39;,this.id);isHovered=1;" onmouseout="showCart(&#39;hide&#39;,this.id);isHovered=1;">
                     <h3 class="cartTabs">
                        <a href="javascript:void(0)" onclick="showCartList(0);" class="phyCartTab"><span class="tab">My Cart</span> <span id="cartListItemCount" class="cartListItemCount"></span></a><a href="javascript:void(0)" onclick="showCartList(1);" class="digCartTab"><span class="tab">My Digital Cart</span> <span id="digitalcartListItemCount" class="cartListItemCount"></span></a><span class="cartHide"><a href="href="<?php echo $pathval; ?>Welcome.php"/Tools?art=7355#" onclick="showCart(&#39;hide&#39;,&#39;cartList&#39;); return false;"><span>Close</span></a></span>
                        <div class="clear"></div>
                     </h3>
                     <div id="physicalPopUp" style="display:block;">
                        <div id="cartAlert"></div>
                        <div id="cartListing"></div>
                        <div class="cartSubTotal">
                           <table border="0" cellpadding="0" cellspacing="0">
                              <tbody>
                                 <tr>
                                    <td id="cartListItemCountOLD" class="cartListItemCount"></td>
                                    <td id="cartListSubtotal" class="cartListSubtotal">Your cart is empty.</td>
                                    <td id="cartListCheckout" class="hide"></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div id="digitalPopUp" style="display:none;">
                        <div id="digitalcartAlert"></div>
                        <div id="digitalcartListing"></div>
                        <div class="digitalcartSubTotal">
                           <table border="0" cellpadding="0" cellspacing="0">
                              <tbody>
                                 <tr>
                                    <td id="digitalcartListItemCountOLD" class="digitalcartListItemCount"></td>
                                    <td id="digitalcartListSubtotal" class="digitalcartListSubtotal">Your digital cart is empty.</td>
                                    <td id="digitalcartListCheckout" class="hide"></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div id="digitalcartItemAdded"></div>
                     </div>
                     <div id="cartItemAdded"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="ctl00_HeaderPlaceHolder_PitscoHeader1_pnlStoreMegaMenu" class="megamenu">
         <div tabindex="0" id="ctl00_HeaderPlaceHolder_PitscoHeader1_RadMenu1" class="RadMenu RadMenu_Default rmSized" style="height:55px;width:180px;z-index:500;">
            <ul class="rmRootGroup rmHorizontal">
               <li class="rmItem rmFirst rmLast rmTemplate">
                  <div class="rmText">
                     <span class="products">Browse by <span class="bigger">Category</span></span>
                  </div>
                  <div class="rmSlide">
                     <ul class="rmVertical rmGroup rmLevel1">
                        <li class="rmItem rmFirst rmTemplate flyOut sci">
                           <div class="rmText">
                              <div class="menuItem">
                                 <a href="javascript:void(0);"><span><span>S</span>cience</span></a>
                              </div>
                           </div>
                           <div class="rmSlide">
                              <ul class="rmVertical rmGroup rmLevel2">
                                 <li class="rmItem rmFirst rmLast rmTemplate">
                                    <div class="rmText">
                                       <div class="menuFlyOut" onmouseover="mockHover(&#39;sci&#39;,true);" onmouseout="mockHover(&#39;sci&#39;,false);">
                                          <ul class="flyOutLinks">
                                             <li class="prods"><a href="http://www.pitsco.com/Science&amp;loc=mm">Science Products</a>
                                                <span class="links">
                                                <a href="http://www.pitsco.com/Science/Grades-K-5&amp;loc=mm">K-5</a> | <a href="http://www.pitsco.com/Science/Grades-6-8&amp;loc=mm">6-8</a> | <a href="http://www.pitsco.com/Science/Grades-9-12&amp;loc=mm">9-12</a>
                                                </span>
                                             </li>
                                             <li class="acts"><a href="http://www.pitsco.com/Science/Education-Units/Activities&amp;loc=mm">Science Activities</a>
                                                <span class="links">
                                                <a href="http://www.pitsco.com/Science/Grades-K-5/Education-Units/Activities&amp;loc=mm">K-5</a> | <a href="http://www.pitsco.com/Science/Grades-6-8/Education-Units/Activities&amp;loc=mm">6-8</a> | <a href="http://www.pitsco.com/Science/Grades-9-12/Education-Units/Activities&amp;loc=mm">9-12</a>
                                                </span>
                                             </li>
                                             <li class="curric"><a href="http://www.pitsco.com/Curriculum/Science&amp;loc=mm">Science Curriculum</a>
                                                <span class="links">
                                                <a href="http://www.pitsco.com/Curriculum/Science/Grades-K-5&amp;loc=mm">K-5</a> | <a href="http://www.pitsco.com/Curriculum/Science/Grades-6-8&amp;loc=mm">6-8</a> | <a href="http://www.pitsco.com/Curriculum/Science/Grades-9-12&amp;loc=mm">9-12</a>
                                                </span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="rmItem  rmTemplate flyOut tech">
                           <div class="rmText">
                              <div class="menuItem">
                                 <a href="javascript:void(0);"><span><span>T</span>echnology</span></a>
                              </div>
                           </div>
                           <div class="rmSlide">
                              <ul class="rmVertical rmGroup rmLevel2">
                                 <li class="rmItem rmFirst rmLast rmTemplate">
                                    <div class="rmText">
                                       <div class="menuFlyOut" onmouseover="mockHover(&#39;tech&#39;,true);" onmouseout="mockHover(&#39;tech&#39;,false);">
                                          <ul class="flyOutLinks">
                                             <li class="prods"><a href="http://www.pitsco.com/Technology&amp;loc=mm">Technology Products</a>
                                                <span class="links">
                                                <a href="http://www.pitsco.com/Technology/Grades-K-5&amp;loc=mm">K-5</a> | <a href="http://www.pitsco.com/Technology/Grades-6-8&amp;loc=mm">6-8</a> | <a href="http://www.pitsco.com/Technology/Grades-9-12&amp;loc=mm">9-12</a>
                                                </span>
                                             </li>
                                             <li class="acts"><a href="http://www.pitsco.com/Technology/Education-Units/Activities&amp;loc=mm">Technology Activities</a>
                                                <span class="links">
                                                <a href="http://www.pitsco.com/Technology/Grades-K-5/Education-Units/Activities&amp;loc=mm">K-5</a> | <a href="http://www.pitsco.com/Technology/Grades-6-8/Education-Units/Activities&amp;loc=mm">6-8</a> | <a href="http://www.pitsco.com/Technology/Grades-9-12/Education-Units/Activities&amp;loc=mm">9-12</a>
                                                </span>
                                             </li>
                                             <li class="curric"><a href="http://www.pitsco.com/Curriculum/Technology&amp;loc=mm">Technology Curriculum</a>
                                                <span class="links">
                                                <a href="http://www.pitsco.com/Curriculum/Technology/Grades-K-5&amp;loc=mm">K-5</a> | <a href="http://www.pitsco.com/Curriculum/Technology/Grades-6-8&amp;loc=mm">6-8</a> | <a href="http://www.pitsco.com/Curriculum/Technology/Grades-9-12&amp;loc=mm">9-12</a>
                                                </span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="rmItem  rmTemplate flyOut eng">
                           <div class="rmText">
                              <div class="menuItem">
                                 <a href="javascript:void(0);"><span><span>E</span>ngineering</span></a>
                              </div>
                           </div>
                           <div class="rmSlide">
                              <ul class="rmVertical rmGroup rmLevel2">
                                 <li class="rmItem rmFirst rmLast rmTemplate">
                                    <div class="rmText">
                                       <div class="menuFlyOut" onmouseover="mockHover(&#39;eng&#39;,true);" onmouseout="mockHover(&#39;eng&#39;,false);">
                                          <ul class="flyOutLinks">
                                             <li class="prods"><a href="http://www.pitsco.com/Engineering&amp;loc=mm">Engineering Products</a>
                                                <span class="links">
                                                <a href="http://www.pitsco.com/Engineering/Grades-K-5&amp;loc=mm">K-5</a> | <a href="http://www.pitsco.com/Engineering/Grades-6-8&amp;loc=mm">6-8</a> | <a href="http://www.pitsco.com/Engineering/Grades-9-12&amp;loc=mm">9-12</a>
                                                </span>
                                             </li>
                                             <li class="acts"><a href="http://www.pitsco.com/Engineering/Education-Units/Activities&amp;loc=mm">Engineering Activities</a>
                                                <span class="links">
                                                <a href="http://www.pitsco.com/Engineering/Grades-K-5/Education-Units/Activities&amp;loc=mm">K-5</a> | <a href="http://www.pitsco.com/Engineering/Grades-6-8/Education-Units/Activities&amp;loc=mm">6-8</a> | <a href="http://www.pitsco.com/Engineering/Grades-9-12/Education-Units/Activities&amp;loc=mm">9-12</a>
                                                </span>
                                             </li>
                                             <li class="curric"><a href="http://www.pitsco.com/Curriculum/Engineering&amp;loc=mm">Engineering Curriculum</a>
                                                <span class="links">
                                                <a href="http://www.pitsco.com/Curriculum/Engineering/Grades-K-5&amp;loc=mm">K-5</a> | <a href="http://www.pitsco.com/Curriculum/Engineering/Grades-6-8&amp;loc=mm">6-8</a> | <a href="http://www.pitsco.com/Curriculum/Engineering/Grades-9-12&amp;loc=mm">9-12</a>
                                                </span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="rmItem  rmTemplate flyOut math">
                           <div class="rmText">
                              <div class="menuItem">
                                 <a href="javascript:void(0);"><span><span>M</span>ath</span></a>
                              </div>
                           </div>
                           <div class="rmSlide">
                              <ul class="rmVertical rmGroup rmLevel2">
                                 <li class="rmItem rmFirst rmLast rmTemplate">
                                    <div class="rmText">
                                       <div class="menuFlyOut" onmouseover="mockHover(&#39;math&#39;,true);" onmouseout="mockHover(&#39;math&#39;,false);">
                                          <ul class="flyOutLinks">
                                             <li class="prods"><a href="http://www.pitsco.com/Math&amp;loc=mm">Math Products</a>
                                                <span class="links">
                                                <a href="http://www.pitsco.com/Math/Grades-K-5&amp;loc=mm">K-5</a> | <a href="http://www.pitsco.com/Math/Grades-6-8&amp;loc=mm">6-8</a> | <a href="http://www.pitsco.com/Math/Grades-9-12&amp;loc=mm">9-12</a>
                                                </span>
                                             </li>
                                             <li class="acts"><a href="http://www.pitsco.com/Math/Education-Units/Activities&amp;loc=mm">Math Activities</a>
                                                <span class="links">
                                                <a href="http://www.pitsco.com/Math/Grades-K-5/Education-Units/Activities&amp;loc=mm">K-5</a> | <a href="http://www.pitsco.com/Math/Grades-6-8/Education-Units/Activities&amp;loc=mm">6-8</a> | <a href="http://www.pitsco.com/Math/Grades-9-12/Education-Units/Activities&amp;loc=mm">9-12</a>
                                                </span>
                                             </li>
                                             <li class="curric"><a href="http://www.pitsco.com/Curriculum/Math&amp;loc=mm">Math Curriculum</a>
                                                <span class="links">
                                                <a href="http://www.pitsco.com/Curriculum/Math/Grades-K-5&amp;loc=mm">K-5</a> | <a href="http://www.pitsco.com/Curriculum/Math/Grades-6-8&amp;loc=mm">6-8</a> | <a href="http://www.pitsco.com/Curriculum/Math/Grades-9-12&amp;loc=mm">9-12</a>
                                                </span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="rmItem  rmTemplate flyOut intSTEM">
                           <div class="rmText">
                              <div class="menuItem">
                                 <a href="javascript:void(0);"><span class="smaller">Integrated STEM</span></a>
                              </div>
                           </div>
                           <div class="rmSlide">
                              <ul class="rmVertical rmGroup rmLevel2">
                                 <li class="rmItem rmFirst rmLast rmTemplate">
                                    <div class="rmText">
                                       <div class="menuFlyOut" onmouseover="mockHover(&#39;intSTEM&#39;,true);" onmouseout="mockHover(&#39;intSTEM&#39;,false);">
                                          <ul class="flyOutLinks intSTEM">
                                             <li>
                                                <a href="http://www.pitsco.com/Curriculum/Integrated-STEM&amp;loc=mm">Integrated STEM</a>
                                             </li>
                                          </ul>
                                          <ul class="flyOutLinks intSTEM">
                                             <li><span class="links"><a href="http://www.pitsco.com/Curriculum/Integrated-STEM/STEM-Expeditions&amp;loc=mm">STEM Expeditions</a></span></li>
                                             <li><span class="links"><a href="http://www.pitsco.com/Classroom-Solutions/Missions-2-FAQ/&amp;loc=mm">STREAM Missions</a></span></li>
                                             <li><span class="links"><a href="http://www.pitsco.com/Curriculum/Integrated-STEM/STEM-Modules&amp;loc=mm">STEM Modules</a></span></li>
                                             <li><span class="links"><a href="http://www.pitsco.com/Curriculum/Integrated-STEM/STEM-in-the-Gym&amp;loc=mm">STEM in the Gym</a></span></li>
                                             <li><span class="links"><a href="http://www.pitsco.com/Curriculum/Integrated-STEM/STEM-Units&amp;loc=mm">STEM Units</a></span></li>
                                             <li><span class="links"><a href="http://www.pitsco.com/Curriculum/Integrated-STEM/STEM-Challenges&amp;loc=mm">STEM Challenges</a></span></li>
                                             <li><span class="links"><a href="http://www.pitsco.com/Curriculum/Integrated-STEM/GreenSTEM-Units&amp;loc=mm">GreenSTEM Units</a></span></li>
                                             <li><span class="links"><a href="http://www.pitsco.com/Engineering/Teaching-Engineering/Everyday-STEM&amp;loc=mm">Everyday STEM</a></span></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="rmItem  rmTemplate flyOut pd">
                           <div class="rmText">
                              <div class="menuItem">
                                 <a href="javascript:void(0);"><span class="smaller">Professional Development</span></a>
                              </div>
                           </div>
                           <div class="rmSlide">
                              <ul class="rmVertical rmGroup rmLevel2">
                                 <li class="rmItem rmFirst rmLast rmTemplate">
                                    <div class="rmText">
                                       <div class="menuFlyOut" onmouseover="mockHover(&#39;pd&#39;,true);" onmouseout="mockHover(&#39;pd&#39;,false);">
                                          <ul class="flyOutLinks pd">
                                             <li><a href="http://www.pitsco.com/Curriculum/Professional-Development&amp;loc=mm">Professional Development</a></li>
                                          </ul>
                                          <ul class="flyOutLinks pd">
                                             <li><span class="links"><a href="http://www.pitsco.com/Curriculum/Professional-Development/Grades-K-5&amp;loc=mm">Grades K-5</a></span></li>
                                             <li><span class="links"><a href="http://www.pitsco.com/Curriculum/Professional-Development/Grades-6-8&amp;loc=mm">Grades 6-8</a></span></li>
                                             <li><span class="links"><a href="http://www.pitsco.com/Curriculum/Professional-Development/Grades-6-8&amp;loc=mm">Grades 9-12</a></span></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="rmItem  rmTemplate flyOut dp">
                           <div class="rmText">
                              <div class="menuItem">
                                 <a href="javascript:void(0);"><span class="smaller">Dropout Prevention</span></a>
                              </div>
                           </div>
                           <div class="rmSlide">
                              <ul class="rmVertical rmGroup rmLevel2">
                                 <li class="rmItem rmFirst rmLast rmTemplate">
                                    <div class="rmText">
                                       <div class="menuFlyOut" onmouseover="mockHover(&#39;dp&#39;,true);" onmouseout="mockHover(&#39;dp&#39;,false);">
                                          <a href="http://staracademyprogram.org/"><img src="./Asset_files/star-academy-logo-small.png"></a><br><br>
                                          <span style="display:block; width:180px;">Star Academy targets 8th and 9th grade transition students to re-engage and succeed.</span><br>
                                          <a href="http://staracademyprogram.org/">LEARN MORE</a>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="rmItem rmLast rmTemplate flyOut topCats">
                           <div class="rmText">
                              <div class="menuItem">
                                 <a href="javascript:void(0);"><span class="smaller">Big Book Categories</span></a>
                              </div>
                           </div>
                           <div class="rmSlide">
                              <ul class="rmVertical rmGroup rmLevel2">
                                 <li class="rmItem rmFirst rmLast rmTemplate">
                                    <div class="rmText">
                                       <div class="menuFlyOut" onmouseover="mockHover(&#39;topCats&#39;,true);" onmouseout="mockHover(&#39;topCats&#39;,false);">
                                          <ul class="flyOutLinks">
                                             <li class="topCats"><a href="http://www.pitsco.com/Dragsters&amp;loc=mm">Dragsters</a></li>
                                             <li class="topCats">Aerospace: <a href="http://www.pitsco.com/Science/Flight-Science&amp;loc=mm">Flight</a> &amp; <a href="http://www.pitsco.com/Science/Rocket-Science&amp;loc=mm">Rocketry</a></li>
                                             <li class="topCats"><a href="http://www.pitsco.com/Sustainable-Energy&amp;loc=mm">Sustainable Energy</a></li>
                                             <li class="topCats"><a href="http://www.pitsco.com/Structures&amp;loc=mm">Structures</a></li>
                                             <li class="topCats"><a href="http://www.pitsco.com/Physical-Science&amp;loc=mm">Physical Science</a></li>
                                             <li class="topCats"><a href="http://www.pitsco.com/Robotics&amp;loc=mm">Robotics</a></li>
                                             <li class="topCats"><a href="http://www.pitsco.com/Engineering&amp;loc=mm">Engineering</a></li>
                                             <li class="topCats"><a href="http://www.pitsco.com/Math&amp;loc=mm">Math</a></li>
                                             <li class="topCats"><a href="http://www.pitsco.com/STEM-Curriculum&amp;loc=mm">STEM Curriculum</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                     </ul>
                  </div>
               </li>
            </ul>
            <input id="ctl00_HeaderPlaceHolder_PitscoHeader1_RadMenu1_ClientState" name="ctl00_HeaderPlaceHolder_PitscoHeader1_RadMenu1_ClientState" type="hidden" autocomplete="off">
         </div>
      </div>
   </div> -->
</div>
