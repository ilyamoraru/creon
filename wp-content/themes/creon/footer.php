<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Creon
 */

?>

<footer class="footer mob_footer  container-fluid">
    <div class="row mobile-hidden">
        <div class="col-xl-2 tab-left col-sm-4">
            <ul class="footer-list footer-list1">
                <li class="footer-item footer-title">
                    <p><?= ot_get_option('footer_menu1') ?></p>
                </li>
                <li class="footer-item">
                    <a href="<?= ot_get_option('footer_link1') ?>"><?= ot_get_option('footer_link1_text') ?></a>
                </li>
                <li class="footer-item">
                    <a href="<?= ot_get_option('footer_link2') ?>"><?= ot_get_option('footer_link2_text') ?></a>
                </li>
                <li class="footer-item">
                    <a href="<?= ot_get_option('footer_link3') ?>"><?= ot_get_option('footer_link3_text') ?></a>
                </li>
            </ul>
        </div>
        <div class="col-xl-2 col-sm-4">
            <ul class="footer-list footer-list2">
                <li class="footer-item footer-title">
                    <p><?= ot_get_option('footer_menu2') ?></p>
                </li>
                <li class="footer-item">
                    <a href="<?= ot_get_option('footer_link4') ?>"><?= ot_get_option('footer_link4_text') ?></a>
                </li>
                <li class="footer-item">
                    <a href="<?= ot_get_option('footer_link5') ?>"><?= ot_get_option('footer_link5_text') ?></a>
                </li>
            </ul>
        </div>
        <div class="col-xl-3 col-sm-4">
            <ul class="footer-list footer-list3">
                <li class="footer-item footer-title">
                    <p><?= ot_get_option('footer_menu3') ?></p>
                </li>
                <li class="footer-item">
                    <a href="<?= ot_get_option('footer_link6') ?>"><?= ot_get_option('footer_link6_text') ?></a>
                </li>
                <li class="footer-item">
                    <a href="<?= ot_get_option('footer_link7') ?>"><?= ot_get_option('footer_link7_text') ?></a>
                </li>
            </ul>
        </div>
        <div class="col-2 mob-abs">
            <a href="<?= ot_get_option('footer_link8') ?>" class="bear-footer-link">
                <img src="<?= ot_get_option('footer-bear') ?>" alt="" class="bear-footer">
                <p><?= ot_get_option('footer_link8_text') ?></p>
            </a>
        </div>
        <div class="col-xl-3 col-sm-4 tab-o-1 flex-custom flex-column align-items-end">
            <a href="tel:<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('head_tel')) ?>" class="tel"><?= ot_get_option('head_tel') ?></a>
            <ul class="social-links">
                <li class="social-item">
                    <a href="<?= ot_get_option('head_fb') ?>" class="mdi mdi-facebook-box">
                    </a>
                </li>
                <li class="social-item">
                    <a href="<?= ot_get_option('head_vk') ?>" class="mdi mdi-vk-box"></a>
                </li>
                <li class="social-item">
                    <a href="<?= ot_get_option('head_in') ?>" class="mdi mdi-linkedin-box"></a>
                </li>
                <li class="social-item">
                    <a href="<?= ot_get_option('head_yt') ?>" class="mdi mdi-youtube"></a>
                </li>
            </ul>
        </div>
        <div class="col-xl-6 tab-left tab-o-0 col-sm-4">
            <a href="/" class="footer-logo_cont">
                <img src="<?= ot_get_option('footer-logo') ?>" alt="Creon" class="footer-logo">
                <p>© Creon Group</p>
            </a>
        </div>
        <div class="col-xl-6 tab-o-2 col-sm-4">
            <a href="https://serenity.agency/" target="_blank" class="developer">
                <p><?= ot_get_option('footer_dev') ?></p>
                <svg width="82" height="23" class="serenity"  fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.595 5.167c.664 0 1.277.05 1.89.198.612.15 1.225.398 1.838.696v2.484a6.858 6.858 0 0 0-1.94-.894 5.208 5.208 0 0 0-1.839-.348c-.46 0-.817.1-1.072.248a.789.789 0 0 0-.408.696c0 .198.102.347.306.546.204.199.817.497 1.787.944 1.378.695 2.349 1.291 2.91 1.887.562.597.817 1.242.817 2.037 0 1.143-.408 2.037-1.225 2.683-.817.645-1.89.993-3.268.993a9.36 9.36 0 0 1-2.4-.298c-.766-.199-1.378-.397-1.838-.646V13.81c1.532.845 2.86 1.242 3.88 1.242.562 0 .97-.1 1.328-.298.358-.199.51-.447.51-.745a.629.629 0 0 0-.204-.497c-.102-.149-.306-.298-.561-.447-.255-.149-.97-.546-2.247-1.142-.97-.447-1.685-.944-2.144-1.49C.255 9.885 0 9.29 0 8.544 0 7.5.408 6.707 1.225 6.06c.92-.547 2.043-.894 3.37-.894zm11.029 0c1.787 0 3.166.546 4.187 1.639 1.02 1.093 1.532 2.633 1.532 4.57v.447h-8.527c.153 1.043.51 1.838 1.225 2.434.664.547 1.583.845 2.757.845.766 0 1.481-.15 2.196-.398.715-.248 1.43-.645 2.144-1.142v2.285c-1.43.944-3.114 1.44-5.106 1.44-1.889 0-3.42-.546-4.646-1.688-1.225-1.093-1.787-2.584-1.787-4.421 0-1.789.562-3.23 1.685-4.372 1.123-1.143 2.553-1.64 4.34-1.64zm2.757 4.818c-.102-.844-.357-1.54-.817-1.987-.46-.447-1.072-.695-1.838-.695-.817 0-1.43.248-1.94.695-.46.447-.817 1.143-.92 2.037h5.515v-.05zm12.918-4.222a2.1 2.1 0 0 0-.562-.298 2.78 2.78 0 0 0-1.225-.298c-.715 0-1.328.248-1.94.745-.613.497-1.175 1.341-1.736 2.434h-.051v-2.98h-3.166v11.673h3.166v-5.315c0-.596.153-1.192.408-1.739a3.808 3.808 0 0 1 1.123-1.39c.46-.348.97-.547 1.43-.547.409 0 .92.199 1.48.546L31.3 5.763zm19.453-.596c1.277 0 2.298.397 3.064 1.242.766.844 1.174 1.887 1.174 3.229v7.45h-3.166V9.986c0-.745-.204-1.341-.561-1.788-.358-.447-.868-.646-1.532-.646-.51 0-.97.15-1.379.398a7.38 7.38 0 0 0-1.43 1.39v7.8h-3.165V5.465h3.166v1.64c.561-.647 1.174-1.143 1.787-1.442.613-.298 1.328-.496 2.042-.496zm15.062-2.882h.256v3.13h5.974V7.75H66.07v5.414c0 .547.153.944.51 1.292.358.348.766.497 1.328.497.715 0 1.583-.249 2.553-.795v2.484c-1.123.496-2.196.745-3.217.745-1.379 0-2.4-.348-3.165-1.093-.766-.745-1.124-1.69-1.124-2.931V7.75h-1.889v-.497l4.748-4.968z" fill="#797979"/><path d="M72.86 5.415l2.86 6.309 2.859-6.31H82L73.677 23h-3.42l3.829-8.047-4.646-9.538h3.42zm-36.047-.248c1.787 0 3.166.546 4.187 1.639 1.021 1.093 1.532 2.633 1.532 4.57v.447h-8.527c.153 1.043.51 1.838 1.225 2.434.715.596 1.583.845 2.758.845.765 0 1.48-.15 2.195-.398.715-.248 1.43-.645 2.144-1.142v2.285c-1.43.944-3.114 1.44-5.105 1.44-1.89 0-3.421-.546-4.647-1.688-1.225-1.143-1.787-2.584-1.787-4.421 0-1.789.562-3.23 1.685-4.372 1.123-1.143 2.553-1.64 4.34-1.64zm2.757 4.818c-.102-.844-.357-1.54-.817-1.987-.46-.497-1.072-.695-1.838-.695-.817 0-1.43.248-1.94.695-.46.447-.817 1.143-.92 2.037h5.515v-.05zM58.258 0c.51 0 .919.149 1.276.497.358.347.51.745.51 1.242 0 .447-.152.844-.51 1.242-.357.347-.766.546-1.276.546-.46 0-.92-.199-1.277-.546-.357-.348-.51-.746-.51-1.242 0-.497.204-.895.561-1.242A1.683 1.683 0 0 1 58.258 0zm1.583 5.415v11.673h-3.166V5.415h3.166z" fill="#797979"/></svg>
            </a>
        </div>
    </div>
    <div class="desctop-hidden">
        <div class="top">
            <ul class="footer-list footer-list1">
                <li class="footer-item footer-title">
                    <p><?= ot_get_option('footer_menu1') ?></p>
                </li>
                <li class="footer-item">
                    <a href="<?= ot_get_option('footer_link1') ?>"><?= ot_get_option('footer_link1_text') ?></a>
                </li>
                <li class="footer-item">
                    <a href="<?= ot_get_option('footer_link2') ?>"><?= ot_get_option('footer_link2_text') ?></a>
                </li>
                <li class="footer-item">
                    <a href="<?= ot_get_option('footer_link3') ?>"><?= ot_get_option('footer_link3_text') ?></a>
                </li>
            </ul>
            <div class="right">
                <ul class="footer-list footer-list2">
                    <li class="footer-item footer-title">
                        <p><?= ot_get_option('footer_menu2') ?></p>
                    </li>
                    <li class="footer-item">
                        <a href="<?= ot_get_option('footer_link4') ?>"><?= ot_get_option('footer_link4_text') ?></a>
                    </li>
                    <li class="footer-item">
                        <a href="<?= ot_get_option('footer_link5') ?>"><?= ot_get_option('footer_link5_text') ?></a>
                    </li>
                </ul>
                <ul class="footer-list footer-list3">
                    <li class="footer-item footer-title">
                        <p><?= ot_get_option('footer_menu3') ?></p>
                    </li>
                    <li class="footer-item">
                        <a href="<?= ot_get_option('footer_link6') ?>"><?= ot_get_option('footer_link6_text') ?></a>
                    </li>
                    <li class="footer-item">
                        <a href="<?= ot_get_option('footer_link7') ?>"><?= ot_get_option('footer_link7_text') ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="center">
            <a href="<?= ot_get_option('footer_link8') ?>" class="bear-footer-link">
                <img src="<?= ot_get_option('footer-bear') ?>" alt="" class="bear-footer">
                <p><?= ot_get_option('footer_link8_text') ?></p>
            </a>
            <a href="/" class="footer-logo_cont">
                <img src="<?= ot_get_option('footer-logo') ?>" alt="Creon" class="footer-logo">
                <p>© Creon Group</p>
            </a>
        </div>
        <div class="bottom">
            <a href="<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('head_tel')) ?>" class="tel"><?= ot_get_option('head_tel') ?></a>
            <ul class="social-links">
                <li class="social-item">
                    <a href="<?= ot_get_option('head_fb') ?>" class="mdi mdi-facebook-box">
                    </a>
                </li>
                <li class="social-item">
                    <a href="<?= ot_get_option('head_vk') ?>" class="mdi mdi-vk-box"></a>
                </li>
                <li class="social-item">
                    <a href="<?= ot_get_option('head_in') ?>" class="mdi mdi-linkedin-box"></a>
                </li>
                <li class="social-item">
                    <a href="<?= ot_get_option('head_yt') ?>" class="mdi mdi-youtube"></a>
                </li>
            </ul>
        </div>
        <a href="https://serenity.agency/" target="_blank" class="developer">
            <p><?= ot_get_option('footer_dev') ?></p>
            <svg width="82" height="23" class="serenity"  fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.595 5.167c.664 0 1.277.05 1.89.198.612.15 1.225.398 1.838.696v2.484a6.858 6.858 0 0 0-1.94-.894 5.208 5.208 0 0 0-1.839-.348c-.46 0-.817.1-1.072.248a.789.789 0 0 0-.408.696c0 .198.102.347.306.546.204.199.817.497 1.787.944 1.378.695 2.349 1.291 2.91 1.887.562.597.817 1.242.817 2.037 0 1.143-.408 2.037-1.225 2.683-.817.645-1.89.993-3.268.993a9.36 9.36 0 0 1-2.4-.298c-.766-.199-1.378-.397-1.838-.646V13.81c1.532.845 2.86 1.242 3.88 1.242.562 0 .97-.1 1.328-.298.358-.199.51-.447.51-.745a.629.629 0 0 0-.204-.497c-.102-.149-.306-.298-.561-.447-.255-.149-.97-.546-2.247-1.142-.97-.447-1.685-.944-2.144-1.49C.255 9.885 0 9.29 0 8.544 0 7.5.408 6.707 1.225 6.06c.92-.547 2.043-.894 3.37-.894zm11.029 0c1.787 0 3.166.546 4.187 1.639 1.02 1.093 1.532 2.633 1.532 4.57v.447h-8.527c.153 1.043.51 1.838 1.225 2.434.664.547 1.583.845 2.757.845.766 0 1.481-.15 2.196-.398.715-.248 1.43-.645 2.144-1.142v2.285c-1.43.944-3.114 1.44-5.106 1.44-1.889 0-3.42-.546-4.646-1.688-1.225-1.093-1.787-2.584-1.787-4.421 0-1.789.562-3.23 1.685-4.372 1.123-1.143 2.553-1.64 4.34-1.64zm2.757 4.818c-.102-.844-.357-1.54-.817-1.987-.46-.447-1.072-.695-1.838-.695-.817 0-1.43.248-1.94.695-.46.447-.817 1.143-.92 2.037h5.515v-.05zm12.918-4.222a2.1 2.1 0 0 0-.562-.298 2.78 2.78 0 0 0-1.225-.298c-.715 0-1.328.248-1.94.745-.613.497-1.175 1.341-1.736 2.434h-.051v-2.98h-3.166v11.673h3.166v-5.315c0-.596.153-1.192.408-1.739a3.808 3.808 0 0 1 1.123-1.39c.46-.348.97-.547 1.43-.547.409 0 .92.199 1.48.546L31.3 5.763zm19.453-.596c1.277 0 2.298.397 3.064 1.242.766.844 1.174 1.887 1.174 3.229v7.45h-3.166V9.986c0-.745-.204-1.341-.561-1.788-.358-.447-.868-.646-1.532-.646-.51 0-.97.15-1.379.398a7.38 7.38 0 0 0-1.43 1.39v7.8h-3.165V5.465h3.166v1.64c.561-.647 1.174-1.143 1.787-1.442.613-.298 1.328-.496 2.042-.496zm15.062-2.882h.256v3.13h5.974V7.75H66.07v5.414c0 .547.153.944.51 1.292.358.348.766.497 1.328.497.715 0 1.583-.249 2.553-.795v2.484c-1.123.496-2.196.745-3.217.745-1.379 0-2.4-.348-3.165-1.093-.766-.745-1.124-1.69-1.124-2.931V7.75h-1.889v-.497l4.748-4.968z" fill="#797979"/><path d="M72.86 5.415l2.86 6.309 2.859-6.31H82L73.677 23h-3.42l3.829-8.047-4.646-9.538h3.42zm-36.047-.248c1.787 0 3.166.546 4.187 1.639 1.021 1.093 1.532 2.633 1.532 4.57v.447h-8.527c.153 1.043.51 1.838 1.225 2.434.715.596 1.583.845 2.758.845.765 0 1.48-.15 2.195-.398.715-.248 1.43-.645 2.144-1.142v2.285c-1.43.944-3.114 1.44-5.105 1.44-1.89 0-3.421-.546-4.647-1.688-1.225-1.143-1.787-2.584-1.787-4.421 0-1.789.562-3.23 1.685-4.372 1.123-1.143 2.553-1.64 4.34-1.64zm2.757 4.818c-.102-.844-.357-1.54-.817-1.987-.46-.497-1.072-.695-1.838-.695-.817 0-1.43.248-1.94.695-.46.447-.817 1.143-.92 2.037h5.515v-.05zM58.258 0c.51 0 .919.149 1.276.497.358.347.51.745.51 1.242 0 .447-.152.844-.51 1.242-.357.347-.766.546-1.276.546-.46 0-.92-.199-1.277-.546-.357-.348-.51-.746-.51-1.242 0-.497.204-.895.561-1.242A1.683 1.683 0 0 1 58.258 0zm1.583 5.415v11.673h-3.166V5.415h3.166z" fill="#797979"/></svg>
        </a>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
