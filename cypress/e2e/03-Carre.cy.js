describe("POKER", () => {
    it("Test - Quinte Flush", () => {
        cy.visit('/');
        cy.wait(1000);
        cy.get('select#main_carte1').select('7Cœur');
        cy.get('select#main_carte2').select('7Carreau');
        cy.get('select#main_carte3').select('7Pique');
        cy.get('select#main_carte4').select('7Trefle');
        cy.get('select#main_carte5').select('9Cœur');
        cy.get('button#btnJouer').click();
    })
  })