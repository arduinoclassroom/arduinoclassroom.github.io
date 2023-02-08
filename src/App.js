import "./App.css";
//import { Button, Grid, textDecoration } from "@chakra-ui/react";
//import { motion } from "framer-motion";
import { color, Link } from "@chakra-ui/react";
import { Grid, GridItem } from "@chakra-ui/react";
import {
  AiFillHome,
  // AiFillBook,
  AiFillDollarCircle,
  AiFillShopping,
  AiFillWechat,
  AiFillBug,
  AiFillContacts,
} from "react-icons/ai";
import { ChevronDownIcon } from "@chakra-ui/icons";
import {
  Menu,
  MenuButton,
  MenuList,
  MenuItem,
  // MenuItemOption,
  // MenuGroup,
  // MenuOptionGroup,
  // MenuDivider,
} from "@chakra-ui/react";
//import { Img } from "@chakra-ui/react";
import { Image } from "@chakra-ui/react";
//import { Box } from "@chakra-ui/react";

function App() {
  return (
    <div className="App">
      <div className="nav">
        <Link
          style={{ color: "white", textDecoration: "none" }}
          className="nav-item"
          href="https://chakra-ui.com"
          isExternal>
          Home <AiFillHome className="icon" mx="2px" />
        </Link>

        <Link
          style={{ color: "white", textDecoration: "none" }}
          className=""
          isExternal>
          {/* Learn <AiFillBook className="icon" mx="2px" /> */}
          <Menu>
            <MenuButton
              px={1}
              py={2}
              transition="all 0.2s"
              borderRadius="md"
              // borderWidth="1px"
              _hover={{ bg: "gray.400" }}
              _expanded={{ bg: "blue.400" }}
              _focus={{ boxShadow: "outline" }}>
              Learn <ChevronDownIcon />
            </MenuButton>
            <MenuList>
              <MenuItem _hover={{ bg: "blue.300" }} color={"blackAlpha.900"}>
                Arduino
              </MenuItem>
              <MenuItem _hover={{ bg: "blue.300" }} color={"blackAlpha.900"}>
                Gavesha
              </MenuItem>
              <MenuItem _hover={{ bg: "blue.300" }} color={"blackAlpha.900"}>
                ESP32
              </MenuItem>
            </MenuList>
          </Menu>
        </Link>
        <Link
          style={{ color: "white", textDecoration: "none" }}
          className="nav-item"
          href="https://chakra-ui.com"
          isExternal>
          Donate <AiFillDollarCircle className="icon" mx="2px" />
        </Link>
        <Link
          style={{ color: "white", textDecoration: "none" }}
          className="nav-item"
          href="https://chakra-ui.com"
          isExternal>
          Shop <AiFillShopping className="icon" mx="2px" />
        </Link>
        <Link
          style={{ color: "white", textDecoration: "none" }}
          className="nav-item"
          href="https://chakra-ui.com"
          isExternal>
          About <AiFillWechat className="icon" mx="2px" />
        </Link>
        <Link
          style={{ color: "white", textDecoration: "none" }}
          className="nav-item"
          href="https://chakra-ui.com"
          isExternal>
          Bug <AiFillBug className="icon" mx="2px" />
        </Link>
        <Link
          style={{ color: "white", textDecoration: "none" }}
          className="nav-item"
          href="https://chakra-ui.com"
          isExternal>
          Contact Us <AiFillContacts className="icon" mx="2px" />
        </Link>
      </div>

      <Image
        className="logo"
        borderRadius="full"
        // boxSize="70px"
        src="https://scontent.fcmb2-2.fna.fbcdn.net/v/t39.30808-6/277576113_272911101715735_3835459917504140051_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=zwflr3Z_DrwAX8LOiK7&_nc_ht=scontent.fcmb2-2.fna&oh=00_AfCfHnt2beVEBbIiHQhGxulEN_3h1UvVnDtLtIPSXe_iLg&oe=63E6913D"
        alt="Dan Abramov"
      />
      <div className="logo-name">Arduino classroom</div>

      <section className="container">
        <div className="slider-wrapper">
          <div className="slider">
            <Image
              id="slider-1"
              src="https://cdnb.artstation.com/p/assets/images/images/013/529/375/large/jose-luis-camacho-arduino-due.jpg?1540022097"
              alt="slider 1"
            />
            <Image
              id="slider-2"
              src="https://arduinoclassroom.github.io/img/Arduino-1.jpg"
              alt="slider 2"
            />
            <Image
              id="slider-3"
              src="https://www.datocms-assets.com/76605/1659003709-niclahand.jpeg"
              alt="slider 3"
            />
          </div>
          <div className="slider-nav">
            <Link href="#slider-1"></Link>
            <Link href="#slider-2"></Link>
            <Link href="#slider-3"></Link>
          </div>
        </div>
      </section>
      {/* -------------------------------------------- */}

      <h2>Most Popular Lessons</h2>
      <div>
        <Grid
          h="800px"
          w="100%"
          templateRows="repeat(4, 1fr)"
          templateColumns="repeat(4, 1fr)"
          gap={5}>
          <GridItem colSpan={1}>
            <article>
              <Image
                className="article-img"
                src="https://arduinoclassroom.github.io/img/Arduino-1.jpg"
              />
              <a
                href="https://arduinoclassroom.github.io/first%20lesson.html"
                className="a-space">
                Getting Started with Arduino!
              </a>
            </article>
          </GridItem>
          <GridItem colSpan={1}>
            <article>
              <Image
                className="article-img"
                src="https://arduinoclassroom.github.io/img/Arduino-1.jpg"
              />
              <a href="" className="a-space">
                Getting Started with Arduino!
              </a>
            </article>
          </GridItem>
          <GridItem colSpan={1}>
            <article>
              <Image
                className="article-img"
                src="https://arduinoclassroom.github.io/img/Arduino-1.jpg"
              />
              <a href="" className="a-space">
                Getting Started with Arduino!
              </a>
            </article>
          </GridItem>
          <GridItem colSpan={1}>
            <article>
              <Image
                className="article-img"
                src="https://arduinoclassroom.github.io/img/Arduino-1.jpg"
              />
              <a href="" className="a-space">
                Getting Started with Arduino!
              </a>
            </article>
          </GridItem>
          <GridItem colSpan={1}>
            <article>
              <Image
                className="article-img"
                src="https://arduinoclassroom.github.io/img/Arduino-1.jpg"
              />
              <a href="" className="a-space">
                Getting Started with Arduino!
              </a>
            </article>
          </GridItem>
          <GridItem colSpan={1}>
            <article>
              <Image
                className="article-img"
                src="https://arduinoclassroom.github.io/img/Arduino-1.jpg"
              />
              <a href="" className="a-space">
                Getting Started with Arduino!
              </a>
            </article>
          </GridItem>
          <GridItem colSpan={1}>
            <article>
              <Image
                className="article-img"
                src="https://arduinoclassroom.github.io/img/Arduino-1.jpg"
              />
              <a href="" className="a-space">
                Getting Started with Arduino!
              </a>
            </article>
          </GridItem>
          <GridItem colSpan={1}>
            <article>
              <Image
                className="article-img"
                src="https://arduinoclassroom.github.io/img/Arduino-1.jpg"
              />
              <a href="" className="a-space">
                Getting Started with Arduino!
              </a>
            </article>
          </GridItem>
          <GridItem colSpan={1}>
            <article>
              <Image
                className="article-img"
                src="https://arduinoclassroom.github.io/img/Arduino-1.jpg"
              />
              <a href="" className="a-space">
                Getting Started with Arduino!
              </a>
            </article>
          </GridItem>
          <GridItem colSpan={1}>
            <article>
              <Image
                className="article-img"
                src="https://arduinoclassroom.github.io/img/Arduino-1.jpg"
              />
              <a href="" className="a-space">
                Getting with Arduino!
              </a>
            </article>
          </GridItem>
          <GridItem colSpan={1}>
            <article>
              <Image
                className="article-img"
                src="https://arduinoclassroom.github.io/img/Arduino-1.jpg"
              />
              <a href="" className="a-space">
                Getting Started with Arduino!
              </a>
            </article>
          </GridItem>
          <GridItem colSpan={1}>
            <article>
              <Image
                className="article-img"
                src="https://arduinoclassroom.github.io/img/Arduino-1.jpg"
              />
              <a href="" className="a-space">
                Getting Started with Arduino!
              </a>
            </article>
          </GridItem>
        </Grid>
        <article></article>
      </div>
    </div>
  );
}

export default App;
