<?php

enum Icons
{
    case Logout;
    case Close;
};

class SvgIcons
{
    public static function getIcon($icon)
    {
        switch ($icon) {
            case Icons::Logout:
                return '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_702_6258)"> <path d="M11.476 15C11.2108 15 10.9564 15.1054 10.7689 15.2929C10.5814 15.4804 10.476 15.7348 10.476 16V19C10.476 19.7956 10.1599 20.5587 9.59732 21.1213C9.03471 21.6839 8.27165 22 7.476 22H5C4.20435 22 3.44129 21.6839 2.87868 21.1213C2.31607 20.5587 2 19.7956 2 19V5C2 4.20435 2.31607 3.44129 2.87868 2.87868C3.44129 2.31607 4.20435 2 5 2H7.476C8.27165 2 9.03471 2.31607 9.59732 2.87868C10.1599 3.44129 10.476 4.20435 10.476 5V8C10.476 8.26522 10.5814 8.51957 10.7689 8.70711C10.9564 8.89464 11.2108 9 11.476 9C11.7412 9 11.9956 8.89464 12.1831 8.70711C12.3706 8.51957 12.476 8.26522 12.476 8V5C12.4744 3.67441 11.9471 2.40356 11.0098 1.46622C10.0724 0.528882 8.80159 0.00158786 7.476 0H5C3.67441 0.00158786 2.40356 0.528882 1.46622 1.46622C0.528882 2.40356 0.00158786 3.67441 0 5L0 19C0.00158786 20.3256 0.528882 21.5964 1.46622 22.5338C2.40356 23.4711 3.67441 23.9984 5 24H7.476C8.80159 23.9984 10.0724 23.4711 11.0098 22.5338C11.9471 21.5964 12.4744 20.3256 12.476 19V16C12.476 15.7348 12.3706 15.4804 12.1831 15.2929C11.9956 15.1054 11.7412 15 11.476 15Z"  /> <path d="M22.867 9.87957L18.281 5.29357C18.1888 5.19806 18.0784 5.12188 17.9564 5.06947C17.8344 5.01706 17.7032 4.98947 17.5704 4.98832C17.4376 4.98717 17.3059 5.01247 17.183 5.06275C17.0602 5.11303 16.9485 5.18728 16.8546 5.28117C16.7607 5.37507 16.6865 5.48672 16.6362 5.60962C16.5859 5.73251 16.5606 5.86419 16.5618 5.99697C16.5629 6.12975 16.5905 6.26097 16.6429 6.38297C16.6953 6.50498 16.7715 6.61532 16.867 6.70757L21.129 10.9706L6 11.0006C5.73478 11.0006 5.48043 11.1059 5.29289 11.2935C5.10536 11.481 5 11.7354 5 12.0006C5 12.2658 5.10536 12.5201 5.29289 12.7077C5.48043 12.8952 5.73478 13.0006 6 13.0006L21.188 12.9696L16.865 17.2936C16.7695 17.3858 16.6933 17.4962 16.6409 17.6182C16.5885 17.7402 16.5609 17.8714 16.5598 18.0042C16.5586 18.1369 16.5839 18.2686 16.6342 18.3915C16.6845 18.5144 16.7587 18.6261 16.8526 18.72C16.9465 18.8139 17.0582 18.8881 17.181 18.9384C17.3039 18.9887 17.4356 19.014 17.5684 19.0128C17.7012 19.0117 17.8324 18.9841 17.9544 18.9317C18.0764 18.8793 18.1868 18.8031 18.279 18.7076L22.865 14.1216C23.4277 13.5593 23.744 12.7965 23.7444 12.001C23.7447 11.2055 23.4292 10.4424 22.867 9.87957Z"  /> </g> <defs> <clipPath id="clip0_702_6258"> <rect width="24" height="24" fill="white" /> </clipPath> </defs> </svg>';
            case Icons::Close:
                return '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_702_5996)"> <path d="M23.7073 0.292786C23.5197 0.105315 23.2654 0 23.0003 0C22.7351 0 22.4808 0.105315 22.2933 0.292786L12.0003 10.5858L1.70727 0.292786C1.51975 0.105315 1.26544 0 1.00027 0C0.735111 0 0.480802 0.105315 0.293275 0.292786C0.105804 0.480314 0.000488281 0.734622 0.000488281 0.999786C0.000488281 1.26495 0.105804 1.51926 0.293275 1.70679L10.5863 11.9998L0.293275 22.2928C0.105804 22.4803 0.000488281 22.7346 0.000488281 22.9998C0.000488281 23.2649 0.105804 23.5193 0.293275 23.7068C0.480802 23.8943 0.735111 23.9996 1.00027 23.9996C1.26544 23.9996 1.51975 23.8943 1.70727 23.7068L12.0003 13.4138L22.2933 23.7068C22.4808 23.8943 22.7351 23.9996 23.0003 23.9996C23.2654 23.9996 23.5197 23.8943 23.7073 23.7068C23.8947 23.5193 24.0001 23.2649 24.0001 22.9998C24.0001 22.7346 23.8947 22.4803 23.7073 22.2928L13.4143 11.9998L23.7073 1.70679C23.8947 1.51926 24.0001 1.26495 24.0001 0.999786C24.0001 0.734622 23.8947 0.480314 23.7073 0.292786Z" /> </g> <defs> <clipPath id="clip0_702_5996"> <rect width="24" height="24" fill="white"/> </clipPath> </defs> </svg>';
            default:
                return '';
        }
    }
}
