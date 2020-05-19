<section class="as-seo-faq">
   <div class="content-center">
      <div class="faq-strt sub-inner-content">
         <div class="sec-title">FAQ: </div>
      <?php if (have_rows('add_top_company_seo_faqs', 19280 ) ) : ?>
         <?php while (have_rows('add_top_company_seo_faqs', 19280 ) ) : the_row() ; ?>
            <div class="single-faq-wrap  wow fadeInDown">
               <div class="tit-as single-faq-head"><h3><?php the_sub_field('add_faq_title') ; ?></h3></div>
               <div class="single-faq-content"><?php the_sub_field('add_faq_content') ; ?></div>
            </div>
         <?php endwhile ; ?>
      <?php endif ;  ?>
      </div>
   </div>
</section>
<style>
   .as-seo-faq {
   clear: both;
}
   .as-seo-faq h3 {
    text-transform: uppercase;
    color: #fff;
    font-size: 18px;
    font-family: 'SourceSansPro-Bold';
}
.tit-as {
  cursor: pointer;
  display: block;
  margin-top: 10px;
  padding: 9px 10px 9px 35px;
  position: relative;
  top: 1px;
  border-style: solid;
  border-width: 1px;
  line-height: 25px;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border-color: #612E8A;
  background-color: #612E8A;
  font-size: 18px;
}
.single-faq-head h3::before, .single-faq-head h3::after {
  background: #fff;
}
</style>