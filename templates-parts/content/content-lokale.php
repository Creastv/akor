<?php 
$inw = get_field('inwestycja');
$place = get_field( 'miejscowosc', $inw->ID );
$size = get_field( 'powierzchnia' );
$rooms = get_field( 'liczba_pokoi' );
$price = get_field( 'cena' );
$floor = get_field( 'pietro' );
$gellery = get_field( 'galeria' );

$extras = get_field( 'dodatkowe_info' );
$pdf = get_field( 'rzut_pdf');

?>


<article id="post-<?php the_ID(); ?>" class="single-lokal hentry">
   
    
     <div class="back">
        <a onclick="history.back()" href="#">
            <svg width="34" height="34" id="Warstwa_1" data-name="Warstwa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 69.86 62.26">
            <path d="M13.78,18.86c1.1,1.65,2.14,3.12,3.09,4.65,1.43,2.29,.37,5.23-2.16,6.02-1.78,.56-3.38,.11-4.54-1.3C6.9,24.26,3.7,20.21,.49,16.17c-.74-.93-.63-1.82,.24-2.91C3.45,9.85,6.18,6.44,8.91,3.04c.38-.47,.74-.95,1.13-1.41C11.56-.17,14.09-.53,15.88,.8c1.8,1.33,2.15,3.71,.83,5.72-.93,1.41-1.88,2.81-2.92,4.36,.47,0,.78,0,1.1,0,9.61,0,19.22-.02,28.83,0,7.56,.02,14.06,2.65,19.24,8.2,4.9,5.25,7.19,11.55,6.87,18.7-.54,12.08-9.48,22.08-21.43,24.08-1.32,.22-2.67,.32-4.01,.35-2.94,.05-5.88,.04-8.81,.01-1.98-.02-3.69-1.5-3.92-3.33-.26-2.09,.86-3.9,2.81-4.44,.52-.14,1.08-.15,1.63-.16,3.1-.04,6.21,.05,9.31-.11,7.49-.38,14-5.76,15.91-13.01,2.66-10.08-3.75-20.19-13.99-22.04-1.15-.21-2.35-.26-3.52-.26-9.72-.02-19.44-.01-29.16-.01-.22,0-.44,0-.85,0Z"/>
            </svg>
            <span>wróć</span>
        </a>
    </div>
    <?php get_template_part( 'templates-parts/header/header', 'title' );  ?>
    
    <div class="l-info">
        <ul>
            <?php if($inw) : ?>
            <li>
                <svg id="Warstwa_1" width="44" height="44" data-name="Warstwa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46.31 46.37">
                <path  fill="#0f4480" d="M46.31,46c-.42,.12-.83,.35-1.25,.35-14.62,.02-29.24,.01-43.85,.02-.56,0-1.18,.03-1.2-.73-.03-.8,.61-.86,1.21-.86,2.1,0,4.21,0,6.46,0v-1.3c0-13.93,0-27.87,.02-41.8C7.69,1.11,7.97,.56,8.12,0,15.06,0,22,0,28.93,0c.13,.44,.37,.89,.37,1.33,.03,5.34,.02,10.68,.02,16.03,0,.33,0,.66,0,1.09,.36,.02,.68,.05,1,.05,3.08,0,6.15,0,9.23,0,1.18,0,1.36,.18,1.36,1.37,0,7.91,0,15.81,0,23.72,0,.35,0,.71,0,1.18,1.43,0,2.78-.04,4.13,.02,.43,.02,.86,.31,1.28,.48v.72ZM27.67,18.5V1.67H9.31V44.71h2.25c0-1.95,.1-3.85-.02-5.74-.18-2.84,1.24-3.67,3.55-3.46,.12,.01,.24,0,.36,0,1.3,.09,2.25,1.04,2.27,2.34,.03,1.75,.01,3.5,.01,5.25,0,.53,0,1.06,0,1.6h1.51c0-.45,0-.84,0-1.23,0-7.69,0-15.39,0-23.08,0-1.84,.06-1.9,1.85-1.9,2.17,0,4.33,0,6.57,0Zm-6.8,26.22h18.39V20.17H20.87v24.55Zm-4.73,.01c0-2.3,.03-4.49-.03-6.69,0-.31-.43-.87-.65-.86-.75,.02-1.65-.45-2.25,.41-.05,.07-.05,.17-.05,.26,0,2.28,0,4.56,0,6.88h2.98Z"/>
                <path  fill="#0f4480" d="M17.73,21.66c0,.69-.01,1.39,0,2.08,.02,.68-.32,1.02-.97,1.03-1.41,.02-2.83,.02-4.24,0-.64,0-.98-.34-.97-1.03,.02-1.42,.02-2.83,0-4.25,0-.65,.33-.97,.92-.98,1.44-.02,2.89-.02,4.33,0,.6,0,.93,.34,.92,.98-.01,.72,0,1.45,0,2.17Zm-1.63,1.49v-2.99h-2.89v2.99h2.89Z"/>
                <path  fill="#0f4480" d="M22.41,3.08c.72,0,1.44,0,2.17,0,.59,0,.9,.32,.91,.89,.01,1.48,.01,2.95,0,4.43,0,.59-.35,.87-.93,.87-1.44,0-2.89,0-4.33,0-.64,0-.95-.33-.96-.94-.01-1.44-.02-2.89,0-4.34,0-.6,.33-.94,.98-.92,.72,.01,1.44,0,2.17,0Zm1.43,1.66h-2.97v2.88h2.97v-2.88Z"/>
                <path  fill="#0f4480" d="M14.61,3.08c.72,0,1.44,0,2.16,0,.63,0,.96,.28,.96,.92,0,1.47,.04,2.95-.04,4.42-.02,.3-.51,.79-.8,.81-1.5,.08-3.01,.08-4.5,0-.29-.02-.77-.52-.78-.83-.08-1.47-.04-2.95-.04-4.42,0-.59,.3-.89,.88-.89,.72,0,1.44,0,2.16,0Zm1.48,1.66h-2.87v2.9h2.87v-2.9Z"/>
                <path  fill="#0f4480" d="M14.62,26.26c.72,0,1.44,0,2.16,0,.63,0,.95,.3,.95,.93,0,1.44,0,2.89,0,4.33,0,.64-.32,.93-.95,.93-1.41,0-2.83,0-4.24,0-.66,0-1-.28-.99-.98,.02-1.41,.01-2.83,0-4.24,0-.68,.32-.99,.99-.98,.69,.01,1.38,0,2.07,0Zm-1.43,4.55h2.89v-2.89h-2.89v2.89Z"/>
                <path  fill="#0f4480" d="M25.49,13.87c0,.69,0,1.39,0,2.08,0,.7-.28,1.08-1.01,1.08-1.41,0-2.83,0-4.24,0-.64,0-.96-.34-.97-.94-.02-1.45-.01-2.89,0-4.34,0-.62,.34-.94,.97-.94,1.44,0,2.89,0,4.33,0,.62,0,.93,.35,.92,.97,0,.69,0,1.39,0,2.08Zm-4.6-1.42v2.91h2.93v-2.91h-2.93Z"/>
                <path  fill="#0f4480" d="M11.56,13.86c0-.69,.01-1.38,0-2.08-.02-.64,.29-.97,.91-.97,1.44-.02,2.89-.01,4.33,0,.61,0,.94,.3,.94,.95,0,1.44,0,2.89,0,4.33,0,.64-.33,.93-.95,.93-1.41,0-2.83,0-4.24,0-.67,0-1-.31-.98-.99,.01-.72,0-1.44,0-2.17Zm4.55-1.42h-2.9v2.91h2.9v-2.91Z"/>
                <path  fill="#0f4480" d="M37.07,24.73c0,.66-.02,1.33,0,1.99,.02,.75-.31,1.14-1.06,1.14-1.39,0-2.77,0-4.16,0-.66,0-1.01-.35-1.01-1.01,0-1.42,0-2.83,0-4.25,0-.66,.36-1,1.01-1.01,1.39,0,2.77-.01,4.16,0,.74,0,1.09,.39,1.06,1.14-.02,.66,0,1.33,0,1.99Zm-1.65,1.49v-2.97h-2.96v2.97h2.96Z"/>
                <path  fill="#0f4480" d="M29.32,24.7c0,.72-.01,1.45,0,2.17,.01,.64-.3,.98-.91,.99-1.44,.02-2.89,.02-4.33,0-.6,0-.94-.32-.93-.97,.01-1.45,.01-2.89,0-4.34,0-.66,.37-.94,.96-.95,1.41-.02,2.83-.02,4.24,0,.64,0,1,.33,.98,1.02-.02,.69,0,1.39,0,2.08Zm-1.65,1.52v-2.97h-2.89v2.97h2.89Z"/>
                <path  fill="#0f4480" d="M33.96,43.28c-.69,0-1.38-.02-2.08,0-.68,.02-1.03-.3-1.04-.95-.02-1.44-.01-2.89,0-4.34,0-.62,.36-.91,.98-.91,1.41,0,2.83,0,4.24,0,.67,0,1,.31,1,.99,0,1.38,0,2.77,0,4.15,0,.7-.3,1.07-1.03,1.05-.69-.01-1.38,0-2.08,0Zm1.46-4.55h-2.95v2.89h2.95v-2.89Z"/>
                <path  fill="#0f4480" d="M29.32,40.15c0,.72,0,1.44,0,2.17,0,.68-.32,.98-1,.97-1.41-.01-2.83,0-4.24,0-.63,0-.94-.3-.94-.94,0-1.44,0-2.89,0-4.33,0-.59,.27-.91,.86-.92,1.47-.01,2.95,0,4.42,0,.64,0,.91,.36,.9,.98-.01,.69,0,1.38,0,2.08Zm-4.54,1.48h2.89v-2.88h-2.89v2.88Z"/>
                <path  fill="#0f4480" d="M37.07,32.49c0,.66-.02,1.33,0,1.99,.02,.71-.29,1.08-1.01,1.08-1.41,0-2.83,0-4.24,0-.68,0-.98-.37-.99-1.02,0-1.39,0-2.77,0-4.16,0-.75,.39-1.07,1.14-1.05,1.32,.03,2.65,.03,3.97,0,.82-.01,1.14,.37,1.12,1.16-.02,.66,0,1.33,0,1.99Zm-4.61,1.44h2.95v-2.93h-2.95v2.93Z"/>
                <path  fill="#0f4480" d="M29.32,32.42c0,.72,0,1.44,0,2.17,.01,.64-.3,.96-.92,.97-1.44,.01-2.89,.01-4.33,0-.61,0-.94-.31-.93-.95,.01-1.44,0-2.89,0-4.33,0-.65,.34-.92,.96-.92,1.41,0,2.83,0,4.24,0,.68,0,.98,.33,.97,1-.01,.69,0,1.38,0,2.08Zm-4.54-1.43v2.93h2.89v-2.93h-2.89Z"/>
                </svg>
                <p><span>Nazwa inwestycji:</span> <b><?php echo $inw->post_title; ?></b></p>
            </li>
            <?php endif; ?>
            <?php if($place) : ?>
             <li>
                <svg width="44" height="44" data-name="Warstwa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.09 48.22">
                <path  fill="#0f4480" d="M17.55,0c8.79,.07,16.14,6.5,17.39,15.16,.47,3.25-.28,6.24-1.49,9.17-2.62,6.31-6.27,12.03-10.07,17.67-1.08,1.61-2.2,3.19-3.32,4.77-1.29,1.81-3.66,1.99-4.93,.21-5.4-7.61-10.68-15.29-14.09-24.09C-2.76,13.08,4.27,1.7,15,.25c.85-.11,1.7-.17,2.55-.25Zm-.27,1.59c-4.56,.14-8.67,1.88-11.82,5.56C2.49,10.61,.98,14.65,1.76,19.21c.37,2.18,1.22,4.34,2.15,6.37,3.28,7.19,7.72,13.71,12.25,20.16,.77,1.1,1.95,1.07,2.75-.04,1-1.39,1.98-2.8,2.94-4.22,3.63-5.36,7.14-10.81,9.75-16.76,1.24-2.82,2.24-5.69,1.86-8.91-.94-8.03-7.79-14.21-16.16-14.21Z"/>
                <path  fill="#0f4480" d="M17.51,4.08c7.51,0,13.57,6.05,13.57,13.56,0,7.45-6.06,13.51-13.51,13.52-7.5,0-13.57-6.05-13.56-13.56,0-7.45,6.06-13.51,13.51-13.52Zm.03,25.51c6.57,0,11.92-5.34,11.97-11.93,.05-6.58-5.38-12.02-11.98-12.02-6.57,0-11.92,5.34-11.97,11.93-.05,6.58,5.38,12.02,11.97,12.02Z"/>
                <path  fill="#0f4480" d="M16.78,11.36c-1.83-.06-4.69,.86-7.13,2.99-.19,.17-.35,.45-.57,.49-.33,.06-.81,.09-1-.1-.17-.18-.19-.77-.02-.97,.42-.51,.95-.94,1.48-1.33,5.13-3.83,12.4-3.44,17.08,.92,.29,.27,.58,.74,.56,1.1-.04,.63-.84,.75-1.41,.22-2.15-2.01-4.68-3.11-9-3.31Z"/>
                <path  fill="#0f4480" d="M17.63,13.41c2.51,.05,4.67,.9,6.48,2.61,.43,.4,.79,.83,.28,1.37-.47,.49-.89,.17-1.31-.2-3.26-2.93-7.63-2.96-10.97-.11-.07,.06-.14,.12-.21,.19-.39,.38-.82,.55-1.24,.1-.41-.45-.2-.87,.19-1.23,1.92-1.78,4.18-2.71,6.78-2.72Z"/>
                <path  fill="#0f4480" d="M17.54,25.47c-1.45,0-2.62-1.14-2.63-2.57-.01-1.45,1.2-2.63,2.68-2.61,1.43,.02,2.6,1.21,2.58,2.62-.02,1.43-1.19,2.56-2.64,2.56Zm1.17-2.4c0-.15,0-.29,0-.44-.39-.27-.76-.71-1.17-.76-.64-.07-1.03,.39-.99,1.09,.04,.65,.45,1.05,1.04,.92,.41-.09,.75-.53,1.13-.81Z"/>
                <path  fill="#0f4480" d="M22.26,19.42c-.24,.26-.4,.59-.61,.62-.3,.04-.65-.09-.95-.22-.94-.4-1.84-1-2.82-1.21-1.26-.26-2.43,.27-3.4,1.13-.42,.37-.87,.62-1.32,.11-.46-.52-.11-.92,.29-1.29,2.23-2.06,6.02-2.08,8.15-.02,.24,.23,.4,.53,.65,.87Z"/>
                </svg>
                <p><span>Miejscowość:</span> <b><?php echo  $place; ?></b></p>
            </li>
            <?php endif; ?>
            <?php if($size) : ?>
            <li>
                <svg  width="44" height="44"  data-name="Warstwa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46.43 46.25">
                <path fill="#0f4480" d="M0,20.05c0-.42,0-.84,0-1.26,.58-.51,1.15-1.04,1.74-1.53,2.3-1.91,4.6-3.81,6.9-5.71C13.32,7.7,17.99,3.85,22.67,0c.36,0,.73,0,1.09,0,3.64,2.98,7.28,5.97,11.06,9.07,0-1.01,0-1.84,0-2.67,0-1.2,.54-1.77,1.75-1.81,1.02-.03,2.05-.01,3.08,0,1.65,0,2.16,.52,2.17,2.17,0,2.4,.03,4.81-.01,7.21-.01,.67,.19,1.1,.71,1.52,1.33,1.06,2.61,2.2,3.91,3.3v1.26c-.59,.67-1.21,1.32-1.77,2.02-.72,.91-1.54,1.43-2.83,.78,0,.49,0,.84,0,1.2,0,6.71,0,13.42,0,20.14,0,1.55-.52,2.06-2.06,2.06-10.94,0-21.88,0-32.82,0-1.93,0-2.34-.4-2.34-2.32,0-6.62,0-13.24,0-19.87,0-.35,0-.71,0-1.2-1.29,.66-2.11,.14-2.83-.78C1.22,21.37,.59,20.72,0,20.05ZM23.24,7.39c-.15,.1-.25,.16-.34,.23-5.35,4.42-10.69,8.85-16.05,13.25-.49,.4-.68,.81-.68,1.45,.02,7.11,.01,14.21,.01,21.32v.95H40.2c.01-.22,.03-.36,.03-.51,0-7.35,0-14.69-.02-22.04,0-.35-.25-.8-.53-1.03-3-2.52-6.03-5.01-9.05-7.51-2.46-2.03-4.92-4.06-7.39-6.1ZM1.58,19.44c.64,.72,1.25,1.4,1.89,2.11,.25-.18,.44-.31,.63-.46,6.05-4.99,12.1-9.98,18.13-14.99,.72-.6,1.23-.63,1.96-.02,5,4.17,10.03,8.31,15.06,12.46,1.22,1.01,2.45,2.01,3.71,3.04,.67-.75,1.26-1.42,1.9-2.14C37.6,13.46,30.41,7.52,23.22,1.57,15.97,7.56,8.81,13.48,1.58,19.44ZM36.42,6.22c0,1.33,0,2.61,0,3.89,0,.16,.09,.37,.2,.47,1.14,.96,2.29,1.9,3.53,2.93V6.22h-3.75Z"/>
                <path fill="#0f4480" d="M10.01,24.05c-.43,.52-.62,.9-.93,1.1-.25,.17-.77,.28-.93,.14-.23-.2-.43-.78-.3-.97,.77-1.15,1.61-2.25,2.49-3.31,.35-.42,.85-.24,1.17,.17,.76,.97,1.5,1.96,2.23,2.96,.32,.43,.31,.93-.19,1.14-.29,.12-.78-.04-1.08-.23-.3-.19-.49-.57-.82-1v15.15h23.71c-.42-.32-.81-.49-.98-.79-.17-.31-.26-.8-.13-1.1,.08-.18,.78-.3,1-.15,1.08,.71,2.12,1.49,3.12,2.31,.49,.4,.4,.92-.09,1.31-.95,.74-1.9,1.49-2.91,2.14-.27,.17-.78-.03-1.18-.06,.09-.39,.1-.83,.29-1.16,.16-.28,.52-.44,.74-.84-.32,0-.63,0-.95,0-7.55,0-15.1,0-22.66,0-1.51,0-1.61-.09-1.61-1.57,0-4.66,0-9.33,0-13.99v-1.24Z"/>
                <path fill="#0f4480" d="M23.24,32.94c.86-1.61,1.67-3.1,2.47-4.6,.13-.24,.21-.52,.39-.71,.25-.26,.63-.68,.86-.62,.31,.08,.68,.49,.78,.82,.64,2.22,1.22,4.45,1.82,6.68,.18,.67,.36,1.33,.54,2,.13,.5,.13,1.02-.46,1.2-.65,.2-.93-.24-1.08-.79-.57-2.11-1.13-4.23-1.7-6.34-.04-.14-.1-.26-.21-.59-.77,1.44-1.46,2.72-2.15,4-.14,.26-.27,.54-.43,.79-.52,.89-1.2,.89-1.7,0-.73-1.32-1.42-2.65-2.13-3.97-.11-.21-.23-.41-.46-.81-.15,.48-.27,.79-.36,1.11-.5,1.85-.99,3.71-1.48,5.57-.03,.12-.07,.23-.1,.34-.14,.54-.51,.94-1.03,.67-.27-.14-.54-.75-.46-1.07,.74-3,1.54-5.98,2.38-8.96,.08-.28,.46-.64,.73-.66,.27-.02,.67,.28,.82,.55,.85,1.49,1.63,3.01,2.44,4.52,.14,.25,.3,.5,.52,.87Z"/>
                <path fill="#0f4480" d="M30.52,26.2c1.08,0,2.16,0,3.24,0,.58,0,1.06,.13,1.04,.81-.02,.62-.48,.78-1.01,.78-1.39,0-2.78,0-4.17,0-.71,0-1.03-.36-.99-1.08,.07-1.2,.63-2.12,1.54-2.84,.76-.6,1.53-1.18,2.31-1.74,.68-.49,.9-1.14,.62-1.89-.24-.66-.78-.99-1.5-.92-.84,.08-1.29,.56-1.4,1.39-.07,.53-.33,.95-.94,.86-.62-.09-.68-.58-.64-1.1,.08-1.26,1.1-2.4,2.42-2.7,1.33-.31,2.77,.39,3.41,1.64,.65,1.26,.4,2.76-.68,3.7-.8,.69-1.69,1.27-2.51,1.93-.34,.27-.61,.62-.91,.93,.04,.08,.09,.16,.13,.23Z"/>
                </svg>
                <p><span>Powierzchnia:</span> <b><?php echo $size; ?> m<sup>2</sup></b></p>
            </li>
            <?php endif; ?>
             <?php if($floor || $floor == 0) : ?>
            <li>
                <svg width="44" height="44" data-name="Warstwa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49.23 40.06">
                <path fill="#0f4480" d="M0,38.89c.41-.13,.82-.36,1.23-.37,2.47-.03,4.94-.02,7.41-.02,.31,0,.63,0,1.06,0,0-1.23,0-2.37,0-3.51,0-1.54,.02-3.08,0-4.62-.01-.9,.4-1.27,1.29-1.26,2.31,.02,4.62,0,6.92,0,.35,0,.69,0,1.17,0,0-.67,0-1.27,0-1.87,0-2.24,0-4.49,0-6.73,0-1.12,.22-1.35,1.36-1.35,2.44-.01,4.87,0,7.31,0,.34,0,.69,0,1.12,0,0-2.44,0-4.78,0-7.11,0-1.55,.08-1.62,1.64-1.62,2.59,0,5.19,0,7.94,0,0-.39,0-.73,0-1.06,0-2.66,0-5.32,0-7.98,0-1.23,.13-1.35,1.3-1.36,2.76,0,5.51,0,8.27,0,.57,0,1.18-.01,1.21,.74,.03,.84-.64,.81-1.23,.81-2.62,0-5.24,0-7.99,0,0,.8,0,1.53,0,2.25,0,2.18,0,4.36,0,6.54,0,1.58-.08,1.66-1.7,1.66-2.24,0-4.49,0-6.73,0-.34,0-.69,0-1.15,0,0,1.96,0,3.8,0,5.65,0,.67-.02,1.35,0,2.02,.03,.87-.46,1.09-1.22,1.09-2.53-.01-5.07,0-7.6,0-.25,0-.5,0-.86,0-.02,.4-.05,.74-.05,1.08,0,2.5,0,5,0,7.5,0,1.16-.24,1.4-1.42,1.4-2.28,0-4.55,0-6.83,0-.34,0-.69,0-1.13,0,0,1.86,0,3.62,0,5.37,0,.96,0,1.92,0,2.89,0,.64-.26,1.04-.97,1.04-3.14,0-6.28,0-9.43-.02-.31,0-.63-.24-.94-.38,0-.26,0-.51,0-.77Z"/>
                <path fill="#0f4480" d="M16.3,1.61c-2.01,0-4.02,0-6.03,0-.32,0-.69,.09-.95-.04-.34-.17-.58-.53-.86-.8,.3-.25,.6-.7,.92-.72,1.37-.08,2.76-.04,4.13-.04,1.54,0,3.08,.02,4.62,0,.75-.01,1.15,.25,1.14,1.05,0,2.92,0,5.84,0,8.75,0,.53-.13,.99-.77,1-.7,.01-.83-.47-.83-1.04,0-2.27,0-4.53,0-7.06-.41,.4-.65,.63-.88,.86-3.2,3.2-6.39,6.39-9.59,9.59-.2,.2-.4,.5-.64,.56-.29,.07-.71,.04-.92-.14-.16-.13-.17-.58-.08-.84,.08-.25,.36-.44,.56-.64,3.2-3.2,6.39-6.4,9.59-9.59,.22-.22,.47-.42,.71-.63-.04-.09-.07-.17-.11-.26Z"/>
                </svg>
                <p><span>Piętro:</span> <b><?php echo $floor == 0 ? 'Parter' : $floor; ?></b> </p>
            </li>
            <?php endif; ?>
            <?php if($rooms) : ?>
            <li>
                <svg  width="44" height="44" data-name="Warstwa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49.22 39.77">
                <path fill="#0f4480" d="M6.23,35.29c-.19,1.1-.4,2.16-.56,3.22-.13,.87-.48,1.35-1.33,1.25-.59-.07-1.19-.02-1.78-.01-.66,0-.97-.34-.96-1.1,.01-1.09,0-2.18,0-3.25Q0,34.99,0,33.16c0-.53,0-1.05,0-1.58,0-1.68,0-1.69,1.59-1.82,0-2.2,0-4.41,0-6.62,0-2.55,.9-3.78,3.18-4.27,0-.47,0-.95,0-1.43,0-4.59,0-9.18,0-13.77C4.77,1.56,6.11,0,7.94,0c11.11,0,22.23,0,33.34,0,1.84,0,3.17,1.54,3.17,3.65,.01,5.04,0,10.08,0,15.15,.5,.19,1.02,.31,1.47,.58,1.1,.67,1.71,1.73,1.71,3.19,0,2.37,0,4.73,0,7.08q1.59,.35,1.59,2.25c0,.49,0,.98,0,1.47q0,1.77-1.59,1.93c0,1.07-.02,2.15,0,3.23,.02,.86-.31,1.24-1.07,1.22-3.15-.08-2.67,.57-3.31-3.01-.08-.47-.19-.94-.29-1.45H6.23Zm1.71-16.36c0-1.26,0-2.38,0-3.51,.02-2.11,1.33-3.66,3.16-3.67,3.18-.02,6.35-.02,9.53,0,1.84,0,3.16,1.53,3.19,3.64,.01,1.16,0,2.32,0,3.52h1.59c0-1.22,0-2.38,0-3.54,.02-2.09,1.36-3.61,3.2-3.62,3.14-.01,6.28-.01,9.43,0,1.91,0,3.23,1.51,3.24,3.69,0,1.15,0,2.31,0,3.45h1.59c0-4.93,0-9.78,0-14.63,0-1.81-.56-2.45-2.15-2.45-10.75,0-21.5,0-32.25,0-1.57,0-2.13,.65-2.13,2.47,0,4.55,0,9.11,0,13.66,0,.33,.03,.65,.05,.99h1.54Zm38.11,10.87c0-2.15,0-4.21,0-6.27,0-2.2-.47-2.74-2.39-2.74-12.7,0-25.4,0-38.1,0-.2,0-.4,0-.6,0-1.14,.06-1.76,.75-1.79,2.06-.03,1.24,0,2.48,0,3.72,0,1.07,0,2.15,0,3.23H46.05ZM1.63,33.35H47.59v-1.67H1.63v1.67Zm20.6-14.4c0-1.25,.04-2.41-.01-3.56-.05-1.11-.68-1.81-1.68-1.82-3.11-.03-6.21-.03-9.32,0-.86,0-1.53,.53-1.62,1.49-.12,1.28-.03,2.59-.03,3.9h12.65Zm17.46,0c0-1.29,.05-2.48-.02-3.67-.06-1.04-.71-1.7-1.66-1.71-3.11-.03-6.21-.02-9.32,0-.86,0-1.53,.52-1.62,1.49-.12,1.28-.03,2.59-.03,3.9h12.65ZM4.09,37.9c.16-.93,.3-1.75,.44-2.61h-1.32v2.61h.87Zm40.58-2.63c.16,.91,.31,1.76,.47,2.63h.83v-2.63h-1.3Z"/>
                </svg>
                <p><span>L. pokoi:</span> <b><?php echo $rooms; ?></b> </p>
            </li>
            <?php endif; ?>
            <?php if($price) : ?>
            <li>
                <svg width="44" height="44" data-name="Warstwa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.49 47.42">
                <path fill="#0f4480" d="M47.49,26.13c-.3,1.37-.54,2.77-.92,4.12-2.57,9.17-10.53,15.94-19.96,17.02C14.21,48.68,3.07,40.64,.49,28.42-2.23,15.55,6.65,2.5,19.58,.36,20.18,.27,20.77,.12,21.37,0c1.61,0,3.21,0,4.82,0,.17,.06,.34,.15,.51,.17,9.41,1.12,17.31,7.86,19.88,17.01,.38,1.35,.62,2.75,.92,4.12v4.82ZM23.83,2.19c-11.87-.02-21.53,9.52-21.56,21.28-.03,12.05,9.54,21.74,21.49,21.76,11.9,.02,21.49-9.51,21.53-21.39,.03-12.01-9.51-21.64-21.46-21.66Z"/>
                <path fill="#0f4480" d="M10.94,18.17c.71-.12,1.65-.22,2.83-.22,1.46,0,2.53,.34,3.21,.95,.63,.54,1,1.37,1,2.39s-.31,1.85-.88,2.44c-.78,.83-2.05,1.26-3.49,1.26-.44,0-.85-.02-1.19-.1v4.58h-1.48v-11.3Zm1.48,5.51c.32,.08,.73,.12,1.22,.12,1.78,0,2.87-.87,2.87-2.44s-1.07-2.24-2.7-2.24c-.64,0-1.14,.05-1.39,.12v4.44Zm7.55-5.65h1.48v10.2h4.89v1.24h-6.36v-11.43Zm8.01,11.43v-11.43h1.61l3.66,5.79c.85,1.34,1.51,2.54,2.05,3.72l.03-.02c-.14-1.53-.17-2.92-.17-4.7v-4.78h1.39v11.43h-1.49l-3.63-5.8c-.8-1.27-1.56-2.58-2.14-3.82l-.05,.02c.08,1.44,.12,2.82,.12,4.72v4.89h-1.39Z"/>
                </svg>
                <p><span>Cena:</span> <b><?php echo $price; ?> zł</b> </p>
            </li>
            <?php endif; ?>
           
        </ul>
    </div>
    <?php if($extras) : ?>
    <div class="l-info--extra">
        <ul>
            <?php foreach($extras as $ex) : ?>
                <li><p><span><?php echo $ex['tytul']; ?> </span><b><?php echo $ex['tresc']; ?> </b></p></li>
            <?php endforeach;?>
        </ul>
    </div>
    <?php endif; ?>
    <div class="l-action">
        <div class="l-action__wrap">
            <div class="col">
                <div class="col_wrap">
                    <div class="galleria">
                        <?php if($gellery) : $i=1 ?>
                            <div class="holder">
                            <?php foreach( $gellery as $image ): ?>
                                <div class="slides">
                                    <a data-fancybox="gallery" href="<?php echo esc_url($image['sizes']['large']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                     </a>
                                </div>
                            <?php endforeach; ?>
                            </div>
                            <div class="prevContainer"><a class="prev" onclick="plusSlides(-1)">
                            <svg viewBox="0 0 24 24">
                                <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                            </svg>
                                </a></div>
                            <div class="nextContainer"><a class="next" onclick="plusSlides(1)">
                                <svg viewBox="0 0 24 24">
                            <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                            </svg>
                                </a>
                        </div>
                            <div class="thumbnails">
                            <?php foreach( $gellery as $image ): ?>
                                <div class="thumbnail">
                                    <img class="slide-thumbnail" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" onclick="currentSlide(<?php echo $i; ?>)" >
                                </div>
                            <?php $i++;  endforeach; ?>
                            <?php if($pdf) : ?>
                            <div class="buttons text-right">
                                <a href="<?php echo $pdf; ?>" target="_blank" class="btn-revers">Pobierz PDF</a>
                            </div>
                            <?php endif ?>
                            </div>
                        <?php else : ?>
                            <?php if ( has_post_thumbnail()  )  : ?>
                                    <?php echo the_post_thumbnail('post-blog');?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri()."/src/img/thumbnail.png"; ?>" width="400" height="250" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <?php if($pdf) : ?>
                            <div class="buttons text-right">
                                <a href="<?php echo $pdf; ?>" target="_blank" class="btn-revers">Pobierz PDF</a>
                            </div>
                            <?php endif ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="l-form">
                    <div class="l-form-header text-center">
                        <h2>Zapytaj o mieszkanie</h2>
                        <p>Zostaw swoje dane, a my odezwiemy się do Ciebie w ciągu 24 godz.</p>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="e39735c" title="Formularz lokal"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>