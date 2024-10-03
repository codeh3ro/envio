import { ImgHTMLAttributes } from 'react';

export default function ApplicationLogo(props: ImgHTMLAttributes<HTMLImageElement>) {
    return (
        <img {...props} src='/assets/logo.png' alt="Unienvia" width="200" height="200">
        </img>
    );
}
