<?php

return [
    'alipay' => [
        'app_id'         => '2016091800539737', //你在支付宝沙箱看到的appid
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt3ekYQkOukz3J0wsEspD3ukkg0hNND/6gH+7+U5Cy0u7zm3DtRMFDYQPqgHaCRZOlG7L3kjT7FI51PA1BCJO653xX+xjuIQqx8YzK9dS/liKBH93DHKuS38gNQmJkeSKuft+lsZYbXUOYVbK0Qyo8rqCdKix9CDUQaiX1UlMFExIiimS3KaWP5X96ECYmngZ91ert5171h01UYUJeZgA1rFEjm2Co2f2tQ+Qa6FxORqFE6x1YOwguwM4KbWKiGHtHQfNhpZJhQEDuZZDq/Kc3FpaqCC7jNlO1q/scElOE5j7QfHsbhZHdcjnmtwgkFKB87+BYv8Hpei+dLvwSjPniQIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAlHKt6a13n9tJBWt++MNTgFdzvW6H+MZgLEauwerr2wc9pgtnm/oCht1b82ad89S6Q0C6fJ1HG5uemgaUEcEcOSzWIUd8V37Pi7VmbkKyD8kC9CppdjagX5s8dUYHLnL57KS/2J5f8IKbeO+ioZpq3fMkeqajnPVUTsE5/SuKkvDhIma/+j4wR9O9Y0Fv+IQlXmi2M6OsjVbPSKLxL3W0QArPNdnKo7lE5Qn9ARDxCh7XrTUxmnPnj2fj8xCmawJd1XFmABn2mhFLTThP/oAUwg8/WvY+0LWPE5PTdUUK7lQ91hlLu9QDEh/wFD/trlRxA6DVtMamkixbJPQZ0+3J2wIDAQABAoIBAA1SxZ0lfokQa1tbLIgzL7ljH/Yuh3GijFss9N5esVB1M+lFOMVdCQEFuQz9dsu9mgITOymYDBvEOdXlJUD6rgfLqGRQQC6yKPqHC2x1+/lCt0smy1RazsYF7sUvxdE7bIb6umU8wauabU3LZDNQ4qqM+gcwEZsywaBX41Z/o+5QIRhVuVtpx/XQjitvaG8ad15XIFAmk5Y8P8ORb9hob+dK3TNfEXCN/8FE6VnFVJ5beMNxXzce6W8VpM/KkWmVUbDtb5aBbDyTu5RSBmW8MwmCl1OmC/nA8nHl6rcPFx/Y4NPMGlYEFtp6R5A2lf4Z0+kTWlWUJ0tsRaTrQgmQLjECgYEA18DgK/CmEdBZXDCzWqnr6R6NmnpxmS3LtWFZ3164xBkYrsfE4M9LjcZoLqSeq01nq/3U0yC+IBVh/UXqPkKft106xmGtTQ5f6vSTcCJolAVIaO6oVjnFohgtiZv+Og6kVBxUhN65uIppku9qq3Nv9ia9OLVWIfZ8IT2E0VGRoh8CgYEAsCOwHLxsMD3U6ErFn6/I9ct0dBsVMCZcnns1xWV8bI0wxxyCNPdbrvghCgtgrB2uEbSuKKj4WDum2iqb89vXPEOAgKIfmE+LxBkH/NsyBJ+h+yVNfVvLGNDn30NOYYCL7xfS9ZoPMtRDScxje01EUPRsYxJ7L8Hri2ngUDhy+MUCgYAsvUw/EFn/m6rMGTU3+cB3yOQoQnfIAd0aMaPHVAcQcvvRUo+a5qGONrRn568Xaqey3KIDXejPEmANezAF1R71kRmdBahAMFjniewA9sGk4CuRxtuVdclrwYO/418mft7Iqk9EdkMg52LZG1iNURTIgGQAnGnOBSTcZ7thBH8klQKBgHIiDeHw7iGsTyNeIARDQXKTrRf23Jngoa9HoyYPhrpIGs1KWcy8Y7pSqgX6LWAZs0thymAqbRGvRYSki31OfH9eNgwkAVkOYkBk/9oGprh8P9ee6kFKk6W26CixUj63rvT0eQwQEb0b8aYGPIgPHy9d0kW4Gf5uJ5SkvGb+zPEJAoGAQZ+z1UjStD2pyQ9gmkJ2jiq3UoypuTDcd7m4Ew8IjtmqdOCtqlw7FSUAIz6k7cUtGmnax8PPyZ3nJ0RnEVI5hDPXBhuR9TXoegVansGKvZuiMDcJc/J0IcW94Rm9uEsTr48tVZu6UEhQJhU+fM1Impa00yoZNBSKN5X0c+c0uRo=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => 'wx*******',   // 公众号 app id
        'mch_id'      => '14*****',  // 第一步获取到的商户号
        'key'         => '******', // 刚刚设置的 API 密钥
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
