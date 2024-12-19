import React from "react";
import { usePage } from "@inertiajs/react";
import './style.css';

export default function Index() {
    const { posts,pgtitle } = usePage().props
    return (
        <div>
            <h1>{pgtitle}</h1>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam
                eligendi nam veritatis sunt repellat eum nisi unde atque quam!
                Architecto temporibus sed quia nisi cum totam rerum, fugiat enim
                placeat et quasi quod laborum officiis consequatur perspiciatis
                voluptas laudantium aut! Possimus pariatur dignissimos eius!
                Eligendi in perferendis, minima nulla deserunt porro illum eum!
                Cupiditate, aspernatur similique reiciendis repellat voluptate
                fugiat nulla, nostrum, atque nihil perferendis numquam et
                voluptates. Blanditiis fugiat omnis cum mollitia, voluptatibus
                veniam quia, amet atque asperiores rerum nemo, libero
                laboriosam! Laudantium iusto rem similique magni placeat neque,
                ab itaque eveniet illo temporibus nulla porro fugit labore
                ducimus sapiente nostrum voluptates iure cupiditate nisi, unde
                quam quos numquam iste adipisci. Obcaecati ipsam itaque iste.
                Suscipit sint cumque dolorum minus obcaecati, necessitatibus
                distinctio enim? Beatae asperiores dicta ea illum quae, sit
                impedit incidunt reiciendis, quidem ipsum laborum eum distinctio
                vel. Sapiente, quaerat! Veniam deserunt debitis similique eius
                dignissimos ad nesciunt voluptatum impedit neque non expedita
                maxime, sequi corporis? Possimus expedita sunt nihil doloribus
                odio voluptatem quis porro error culpa iusto cupiditate neque
                ullam, quia laborum illo repellat a molestiae earum excepturi!
                In, illum reiciendis. Asperiores nihil provident, distinctio
                ducimus, voluptates suscipit minus possimus dolorum vitae,
                corporis sequi debitis expedita.
            </p>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body</th>
                </tr>
                {posts.map(({ id, title, body }) => (
                    <tr>
                        <td>{ id }</td>
                        <td>{ title }</td>
                        <td>{ body }</td>
                    </tr>
                ))}
            </table>
        </div>
    );
}
